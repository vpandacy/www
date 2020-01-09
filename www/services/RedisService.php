<?php
/**
 * Created by PhpStorm.
 * User: 11
 * Date: 2020/1/8
 * Time: 17:11
 */

namespace www\services;
use common\services\BaseService;
use Yii;
class RedisService extends BaseService
{
    private $redis;
    public function __construct(){
        $this->redis    =    new \Redis();
        $this->redis->connect(Yii::$app->params['redis']['host'],Yii::$app->params['redis']['port']);
    }

    public function r_set($key,$val){
        $this->redis->set(Yii::$app->params['redis']['prefix'].$key, json_encode($val),Yii::$app->params['redis']['setTimeout']);
    }
    public function r_get($key){
        return json_decode($this->redis->get(Yii::$app->params['redis']['prefix'].$key),true);
    }
}