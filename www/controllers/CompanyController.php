<?php
/**
 * Class CompanyController
 * Author: Vincent
 * WeChat: apanly
 * CreateTime: 2020/1/6 13:51
 */

namespace www\controllers;

use www\controllers\common\BaseController;

class CompanyController extends BaseController
{
    //关于我们
    public function actionAboutme(){
        return $this->render('aboutme');
    }

    //联系我们
    public function actionContactus(){
        return $this->render('contactus');
    }

    //法律声明
    public function actionLegal(){
        return $this->render('legal');
    }

    //投诉删除
    public function actionTssc(){
        return $this->render('tssc');
    }
}