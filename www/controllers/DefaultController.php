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

        $web = $this->website_info;
        $theme = \Yii::$app->params['Generate']['path']."/theme".$web['theme_id'].".html";
        $cookies = "switch_version=dev_20191113001_page_manager ;";
        HttpClient::setCookie($cookies);
        $value = HttpClient::get($theme);
        $this->layout = true;
        return $this->render('index', [
            'data' => $value,
        ]);

    }
}