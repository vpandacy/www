<?php


namespace common\services;


class AuthSignService
{
    public static function getSign(array $params = [])
    {
        $auth_key = \Yii::$app->params['auth']['auth_key'] ?? '';
        $auth_app_id = \Yii::$app->params['auth']['auth_app_id'] ?? '';

        $params['auth_app_id'] = $auth_app_id;
        $params['time_stamp'] = time();
        ksort($params);

        $sign_str = [];
        foreach ($params as $_key =>$_val){
            $sign_str[] = $_key.'='.$_val;
        }
        $sign_str = implode('&',$sign_str);
        $sign_ser = md5(md5($sign_str).$auth_key.'hsh.cn');
        $params['auth_sign'] = $sign_ser;
        return $params;
    }
}