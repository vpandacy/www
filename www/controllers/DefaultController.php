<?php
/**
 * Created by PhpStorm.
 * User: 11
 * Date: 2020/1/7
 * Time: 18:40
 */

namespace www\controllers;
use common\components\BaseWebController;


class DefaultController extends BaseWebController
{
    public function actionIndex(){

        $web = $this->website_info;
        $theme = \Yii::$app->params['Generate']['path']."/theme".$web['theme_id'].".html";
        $value = file_get_contents($theme);
        $this->layout = true;
        return $this->render('index', [
            'data' => $value,
        ]);

    }
}