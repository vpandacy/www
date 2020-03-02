<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 2020/1/7
 * Time: 14:47
 */

namespace www\controllers;

use common\components\BaseWebController;
use www\services\ApiRequestService;

class LybookController extends BaseWebController
{
    //立即留言
    public function actionIndex()
    {
        $this->layout = false;

        $code = $this->get('code','');



            $info = ApiRequestService::sendPostRequest('/lianzhan/lybook/index',[
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
            $page_script = $data['page_script'];
            $page = $data['page'];

            $project_info = $data['project_info'];
            $project_list = $data['project_r'];

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
                'page_script' => $page_script,
                'project_info' => $project_info,
                'project_like' => $this->randArr($project_list),
                'project_list' => $project_list,
                'project_data' => $this->randArr($project_list,2),
                'footer' => $this->website_info,
            ];


        return $this->render('index', $data);
    }

    private function randArr($arr,$limit=5){
        $keys=array_rand($arr,$limit);
        $ret=array();
        foreach($keys as $v){
            $ret[$v]=$arr[$v];
        }
        return $ret;
    }



}