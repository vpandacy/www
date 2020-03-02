<?php
namespace common\components;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use www\services\ApiRequestService;
use www\services\RedisService;
class BaseWebController extends Controller

{
    public $enableCsrfValidation = false;
    public $website_info = [];


    public $page_size = 30;

    public function setTitle($title = "")
    {
        $this->getView()->title = $title;
    }

    protected function renderJSON($data = [], $msg = "操作成功~~", $code = 200)
    {
        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $response->data   = [
            'msg'    => $msg,
            'code'   => $code,
            'data'   => $data,
            'req_id' => $this->geneReqId()
        ];

        return $response;
    }

    protected function renderErrJSON($msg = "操作失败~~", $data = [])
    {
        return $this->renderJSON($data, $msg, -1);
    }


    protected function geneReqId()
    {
        return uniqid();
    }

    public function post($key, $default = "")
    {
        return Yii::$app->request->post($key, $default);
    }


    public function get($key, $default = "")
    {
        return Yii::$app->request->get($key, $default);
    }

    protected function setCookie($name, $value, $expire = 0, $domain = '')
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name'   => $name,
            'value'  => $value,
            'expire' => $expire ? (time() + $expire) : $expire,
            'domain' => $domain
        ]));
    }

    protected function getCookieObject($name, $value, $expire = 0, $domain = '')
    {
        return new \yii\web\Cookie([
            'name'   => $name,
            'value'  => $value,
            'expire' => $expire ? (time() + $expire) : $expire,
            'domain' => $domain
        ]);
    }

    protected function getCookie($name, $default_val = '')
    {
        $cookies = Yii::$app->request->cookies;
        return $cookies->getValue($name, $default_val);
    }


    protected function removeCookie($name, $domain = '')
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name'   => $name,
            'value'  => "",
            'expire' => 1,
            'domain' => $domain
        ]));
    }

    protected function isAjax()
    {
        return Yii::$app->request->isAjax;
    }

    protected function isGetMethod()
    {
        return Yii::$app->request->isGet;
    }

    public function init()
    {
        if(empty($this->website_info)){
                $content = ApiRequestService::sendPostRequest('/lianzhan/result/web',['web_url'=>$_SERVER['SERVER_NAME']]);
                $data = json_decode($content['data'],true);
                $this->website_info = $data;
        }
    }
}