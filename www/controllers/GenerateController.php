<?php
/**
 * Created by PhpStorm.
 * User: 11
 * Date: 2020/1/6
 * Time: 10:57
 */
namespace www\controllers;
use common\components\BaseWebController;
use common\components\HttpClient;
use www\services\ConstantService;
use \common\services\GlobalUrlService;
class GenerateController extends BaseWebController{

    public function actionIndex(){
        $id = $this->get("id",'');
        if(empty($id)){
            exit;
        }
        $generate_url = \Yii::$app->params['Generate']['url'];
        $data = json_decode($content = HttpClient::post($generate_url.'result/index',['type'=>ConstantService::WEBPAGE_EHEME,'p_id'=>$id]),true);
        if($data['code'] != 200 || !$data['data']){
            exit;
        }
        $info = [];
        foreach($data['data'] as $k=>$v){
            $info[$v['position']][] = $v;
        }

        $head = \Yii::$app->params['HeadNavigation']['theme'.$id];
        $this->layout = true;

        $value = $this->render('theme'.$id.'/index',['data'=>$info,'head'=>$head]);
         $filename = \Yii::$app->params['Generate']['path']."/theme".$id.".html";
        if( ($TxtRes=fopen ($filename,"w+")) === FALSE){
            echo("文件操作失败");
            exit();
        }
        if(!fwrite ($TxtRes,$value)){ //将信息写入文件
            echo ("写入失败！");
            fclose($TxtRes);
            exit();
        }
        echo ("写入成功！");
        fclose ($TxtRes); //关闭指针

    }

    public function actionHead(){
        $id = $this->get("id",'');
        if(empty($id)){
            exit;
        }
        $generate_url = \Yii::$app->params['Generate']['url'];
        $data = json_decode($content = HttpClient::post($generate_url.'result/index',['type'=>ConstantService::WEBPAGE_HEAD,'p_id'=>$id]),true);
        if($data['code'] != 200 || !$data['data']){
            exit;
        }
        $info = [];
        foreach($data['data'] as $k=>$v){
            $info[$v['position']][] = $v;
        }

        $head = \Yii::$app->params['HeadNavigation']['head'.$id];
        $this->layout = true;
        $value =  $this->render('head'.$id,['data'=>$info,'head'=>$head]);

        $filename = \Yii::$app->params['Generate']['path']."/head".$id.".html";
        if( ($TxtRes=fopen ($filename,"w+")) === FALSE){
            echo("文件操作失败");
            exit();
        }
        if(!fwrite ($TxtRes,$value)){ //将信息写入文件
            echo ("写入失败！");
            fclose($TxtRes);
            exit();
        }
        echo ("写入成功！");
        fclose ($TxtRes); //关闭指针
    }
}