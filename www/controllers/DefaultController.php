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
        $value = file_get_contents($theme);

        $value = str_replace("telephone_replace",$this->website_info['company_tel']??'',$value);
        $value = str_replace("company_replace",$this->website_info['company_name']??'',$value);
        $value = str_replace("record_number_replace",$this->website_info['icp']??'',$value);

        $this->layout = true;
        return $this->render('index', [
            'data' => $value,
        ]);

    }
}