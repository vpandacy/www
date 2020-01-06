<?php
/**
 * Created by PhpStorm.
 * User: 11
 * Date: 2020/1/6
 * Time: 10:47
 */

namespace www\controllers;
use common\components\BaseWebController;


class IndexController extends BaseWebController{
    public function actionIndex(){
        echo 11;
    }
}