<?php
/**
 * Class CategoryController
 * Author: Vincent
 * WeChat: apanly
 * CreateTime: 2020/1/7 8:46
 */

namespace www\controllers;


use www\controllers\common\BaseController;

class CategoryController extends BaseController
{
    public function actionIndex(){
        return $this->render('index');
    }
}