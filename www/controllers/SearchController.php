<?php
/**
 * Class SearchController
 * Author: Vincent
 * WeChat: apanly
 * CreateTime: 2020/1/8 14:59
 */

namespace www\controllers;


use www\controllers\common\BaseController;

class SearchController extends BaseController
{

    public function actionIndex(){
        return $this->render('index');
    }
}