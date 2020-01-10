<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 2020/1/9
 * Time: 14:17
 */

namespace www\controllers;

use common\services\GlobalUrlService;
use www\controllers\common\BaseController;
use www\services\ApiRequestService;
use common\services\RedisCacheService;
class BrandController extends BaseController
{
    public function actionIndex()
    {

        $this->layout = false;

        $code = $this->get('code');
        $redis = RedisCacheService::getInstance();


        $data = $redis::getValue('brand='.$code);

        if(!$data){
            $info = ApiRequestService::sendPostRequest('/lianzhan/brand/index',[
                "code" => $code
            ]);
            if (!$info) {
                return $this->render('/error/index', ['msg' => ApiRequestService::getLastErrorMsg()]);
            }

            $info_tmp = $info;

            if (!$info_tmp['data']) {
                return $this->render('/error/index', ['msg' => '返回参数不正确']);
            }
            $data = json_decode($info_tmp['data'], true);
            if (!$data){
                return $this->render('/error/index', ['msg' => '返回信息有误']);
            }
            $project_list = $data['project_list'];
            $page_script = $data['page_script'];
            $page = $data['page'];
            $project_info = $data['project_info'];
            $media_kf = $data['media_kf'];
            $title = $data['title'] ?? '';
            $description = $data['description'] ?? '';
            $keywords = $data['keywords'] ?? '';
            $head_id = $page['head_id'] ?? 0;



            $nav_path = \Yii::$app->params['Generate']['path'];
            $header = @file_get_contents($nav_path."/head{$head_id}.html");

            $data = [
                'title' => $title,
                'description' => $description,
                'keywords' => $keywords,
                'header' => $header,
                'khid' => $page['project_id'],
                'kf_id' => $media_kf['kf_id'],
                'kf_style' => $media_kf['kf_style'],
                'page_script' => $page_script,
                'project_info' => $project_info,
                'code' => $code,
                'project_list' => $project_list,
                'footer' => $this->website_info,
            ];

            $redis::setValue('brand='.$code,$data);
        }

        return $this->render('index', $data);
    }


    //清除缓存
    public function actionClean()
    {
        $code = $this->get('code');
        $redis = RedisCacheService::getInstance();
        $redis::setValue('brand='.$code,null);
        return $this->redirect(GlobalUrlService::buildWWWUrl('/'));
    }
}