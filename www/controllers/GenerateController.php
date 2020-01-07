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

class GenerateController extends BaseWebController{

    public function actionIndex(){
        echo 11;
    }

    public function actionHead(){
        $id = $this->get("id",'');
        if(empty($id)){
            exit;
        }
        $generate_url = \Yii::$app->params['Generate']['url'];
        $data = json_decode($content = HttpClient::post($generate_url,['type'=>2,'p_id'=>$id]),true);
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