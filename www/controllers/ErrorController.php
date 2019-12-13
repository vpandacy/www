<?php

namespace www\controllers;

use common\components\BaseWebController;
use common\services\GlobalUrlService;

class ErrorController extends BaseWebController
{
    public function actionHandler(){
        $reback_url = GlobalUrlService::buildWWWUrl("/");

        $this->layout = false;
        return $this->render("index",[
            "title" => "Page Not Found",
            "msg" => "404警告！ 很不幸，您探索了一个未知领域！",
            "reback_url" => $reback_url
        ]);
    }
}
