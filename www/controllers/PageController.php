<?php

namespace www\controllers;


use common\components\BaseWebController;
use common\components\helper\DateHelper;
use common\components\HttpClient;
use common\services\GlobalUrlService;
use www\services\ApiRequestService;

class PageController extends BaseWebController
{
    public function actionIndex()
    {
        $cookies = "switch_version=server;";
        $media_id = $this->get('media_id');
        $project_id = $this->get('project_id');
        $token = md5($project_id . $media_id);

        //ApiRequestService::setCookies($cookies);
        $info = ApiRequestService::sendPostRequest('/lianzhan/page/index',[
            "media_id" => $media_id,
            "project_id" => $project_id,
            'token' => $token
        ]);
        if (!$info) {
            return $this->render('/error/index', ['msg' => ApiRequestService::getLastErrorMsg()]);
        }

        $info_tmp = $info;
        if (!$info_tmp['data']) {
            return $this->render('/error/index', ['msg' => $info_tmp['msg']]);
        }
        $host = \Yii::$app->params['domains']['cdn_hsh']['domain'];
        $data = json_decode($info_tmp['data'], true);
        $page_script = $data['page_script'];
        $cdn = $host . "/shophtml/" . $data['project_pinyin'] . "/item.html";
        $content = HttpClient::get($cdn);


        return $this->render('index', [
            'content' => $content,
            'page_script' => $page_script,
            'footer' => $this->website_info,
        ]);
    }
}