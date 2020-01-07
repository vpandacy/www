<?php
/**
 * Created by PhpStorm.
 * User: 11
 * Date: 2020/1/6
 * Time: 10:57
 */
namespace www\controllers;
use common\components\BaseWebController;


class GenerateController extends BaseWebController{

    public function actionIndex(){
        echo 11;
    }

    public function actionHead(){
        $id = $this->get("id",'');
        if(empty($id)){
            return $this->redirect("/");
        }
        echo $id;



    }
}