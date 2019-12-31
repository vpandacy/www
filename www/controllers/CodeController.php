<?php


namespace www\controllers;

use common\components\BaseWebController;
use common\components\HttpClient;
use common\services\GlobalUrlService;

class CodeController extends BaseWebController
{
    public function actionIndex()
    {


        $this->layout = false;
        $cookies = "switch_version=dev_20191210_web_template;";
        //HttpClient::setCookie($cookies);
        $code = $this->get('code');

        $info = HttpClient::post(GlobalUrlService::buildApiUrl('/lianzhan/code/index'), [
            "code" => $code
        ]);


        if (!$info) {
            return $this->render('/error/index', ['msg' => '返回信息为空']);
        }

        $info_tmp = json_decode($info, true);

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
        ]);
    }

}