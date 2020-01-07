<?php


namespace www\controllers;

use common\components\BaseWebController;
use common\components\HttpClient;
use www\services\ApiRequestService;

class CodeController extends BaseWebController
{
    public function actionIndex()
    {


        $this->layout = false;
        $code = $this->get('code');

        $info = ApiRequestService::sendPostRequest('/lianzhan/code/index',[
            "code" => $code
        ]);


        if (!$info) {
            return $this->render('/error/index', ['msg' => ApiRequestService::getLastErrorMsg()]);
        }

        $info_tmp = $info;

        if (!$info_tmp['data']) {
            return $this->render('/error/index', ['msg' => '返回参数不正确']);
        }
        $host = \Yii::$app->params['domains']['cdn_hsh']['domain'];
        $data = json_decode($info_tmp['data'], true);
        if (!$data){
            return $this->render('/error/index', ['msg' => '返回信息有误']);
        }
        $page_script = $data['page_script'];
        $page = $data['page'];

        $cdn = $host . "/shophtml/" . $data['project_pinyin'] . "/item.html";
        $content = HttpClient::get($cdn);
        $title = $data['title'] ?? '';
        $description = $data['proj_adv'] ?? '';

        $nav_id = $page['head_id'] ?? 0;
        $nav_path = \Yii::$app->params['navigation'];
        $nav = @file_get_contents($nav_path."nav_$nav_id.php");

        return $this->render('index', [
            'title' => $title,
            'description' => $description,
            'nav' => $nav,
            'khid' => $page['project_id'],
            'content' => $content,
            'page_script' => $page_script,
        ]);
    }

}