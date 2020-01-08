<?php
/**
 * Created by PhpStorm.
 * User: 11
 * Date: 2020/1/6
 * Time: 10:57
 */
namespace www\controllers;
use common\components\BaseWebController;
use www\services\ConstantService;
use www\services\ApiRequestService;
use Yii;


class GenerateController extends BaseWebController{

    public function actionIndex(){
        $id = $this->get("id",'');
        if(empty($id)){
            exit;
        }
        $cookies = Yii::$app->params['cookie']['test'];
        ApiRequestService::setCookies($cookies);
        $content = ApiRequestService::sendPostRequest('/lianzhan/result/index',['type'=>ConstantService::WEBPAGE_EHEME,'p_id'=>$id]);
        $data = json_decode($content['data'],true);


        if($content['code'] != 200 || !$data){
            exit;
        }
        $info = [];
        foreach($data as $k=>$v){
            $info[$v['position']][] = $v;
        }

        $head = \Yii::$app->params['HeadNavigation']['theme'];
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
        $cookies = Yii::$app->params['cookie']['test'];
        ApiRequestService::setCookies($cookies);
        $content = ApiRequestService::sendPostRequest('/lianzhan/result/index',['type'=>ConstantService::WEBPAGE_HEAD,'p_id'=>$id]);
        $data = json_decode($content['data'],true);
        if($content['code'] != 200 || !$data){
            exit;
        }
        $info = [];
        foreach($data as $k=>$v){
            $info[$v['position']][] = $v;
        }

        $head = \Yii::$app->params['HeadNavigation']['head'];
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
