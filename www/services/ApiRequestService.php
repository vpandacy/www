<?php

namespace www\services;

use common\components\HttpClient;
use common\services\BaseService;

class ApiRequestService extends BaseService
{

    private static $cookie = null;
    private static $headers = [];

    protected static function sendRequest ( $url,$params = [],$method = "GET" ){

        $domain = \Yii::$app->params['domains']['api']['domain'];
        $url = $domain . $url;

        if(self::$cookie)
        {
            HttpClient::setCookie(self::$cookie);
        }
        if(!empty(self::$headers))
        {
            HttpClient::setHeader(self::$headers);
        }

        if( $method == "GET" ){
            $result = HttpClient::get( $url,$params );
        }else{
            $result = HttpClient::post( $url,$params );
        }
        try{
            $ret = json_decode( $result ,true);
            if(!isset($ret) || $ret['code'] != 200)
            {
                $ret = self::_err( $ret['msg'] );
            }

        }catch (\Exception $e){
            $ret = self::_err( $e->getMessage() );
        }
        return $ret;
    }



    public static function sendGetRequest( $url,$params = [] ){
        return self::sendRequest( $url,$params,"GET" );
    }

    public static function sendPostRequest( $url,$params = [] ){
        return self::sendRequest( $url,$params,"POST" );
    }
    //设置头部
    public static function setHeaders($header)
    {
        self::$headers = $header;
    }
    //设置cookie
    public static function setCookies( $cookie ){
        self::$cookie = $cookie;
    }
}
