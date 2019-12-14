<?php

namespace www\controllers;


use common\components\BaseWebController;
use common\components\HttpClient;
use common\services\GlobalUrlService;

class PageController extends BaseWebController
{
    public function actionIndex()
    {
        $media_id = $this->get('media_id');
        $project_id = $this->get('project_id');
        $info = HttpClient::post(GlobalUrlService::buildApiUrl('/lianzhan/page/index'), [
            "media_id" => $media_id, "project_id" => $project_id
        ]);
        var_dump($this->getCookie('hsh_api'));
//        var_dump($info);
        die;
        return $this->render('index');
    }
}