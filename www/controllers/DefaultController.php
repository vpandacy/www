<?php
/**
 * Created by PhpStorm.
 * User: 11
 * Date: 2020/1/7
 * Time: 18:40
 */

namespace www\controllers;
use common\components\BaseWebController;
use common\components\HttpClient;

class DefaultController extends BaseWebController
{
    public function actionIndex(){
        $generate_url = \Yii::$app->params['Generate']['url'];
        $data = json_decode($content = HttpClient::post($generate_url.'result/web-page',['web_url'=>$_SERVER['SERVER_NAME']]),true);

    }
}