<?php


namespace www\controllers;

use common\components\BaseWebController;
use common\components\HttpClient;
use common\services\GlobalUrlService;
use www\services\ApiRequestService;

class CodeController extends BaseWebController
{
    public function actionIndex()
    {


        $this->layout = false;
        $cookies = "switch_version=dev_20191210_web_template;";
        //HttpClient::setCookie($cookies);
        //ApiRequestService::setCookies($cookies);
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

        $head_id = $page['board_id'] ?? 0;
        $head = file_get_contents("/head/head$head_id.php");

        return $this->render('index', [
            'title' => $title,
            'head' => $head,
            'content' => $content,
            'page_script' => $page_script,
        ]);
    }

}