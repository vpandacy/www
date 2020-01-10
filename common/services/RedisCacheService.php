<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 2020/1/10
 * Time: 11:18
 */

namespace common\services;

use Yii;
//简单的单例模式
class RedisCacheService
{

    private static $instance;
    private static $redis;
    private function __construct(){
        self::$redis    =    new \Redis();
        self::$redis->connect(Yii::$app->params['redis']['host'],Yii::$app->params['redis']['port']);
    }


    public static function getInstance(){
        if(!(self::$instance instanceof self)){
            self::$instance = new self();
        }
        return self::$instance;
    }


    public static function setValue($key,$val){
        self::$redis->set(Yii::$app->params['redis']['prefix'].$key, json_encode($val),Yii::$app->params['redis']['setTimeout']);
    }
    public static function getValue($key){
        return json_decode(self::$redis->get(Yii::$app->params['redis']['prefix'].$key),true);
    }
    private function __clone(){
        return false;
    }
}