<?php
/**
 * Class CategoryController
 * Author: Vincent
 * WeChat: apanly
 * CreateTime: 2020/1/7 8:46
 */

namespace www\controllers;


use common\components\HttpClient;
use www\controllers\common\BaseController;
use www\services\ApiRequestService;

class CategoryController extends BaseController
{
    public function actionIndex()
    {

//        $cookies = "switch_version=server;";
        $id = $this->get('id',0);
//        $token = md5($project_id . $media_id);

//        ApiRequestService::setCookies($cookies);
        $info = ApiRequestService::sendPostRequest('/lianzhan/type/index', [
            "id" => $id,
        ]);
        if (!$info) {
            return $this->render('/error/index', ['msg' => ApiRequestService::getLastErrorMsg()]);
        }

        $info_tmp = $info['data'];
        if (!$info_tmp) {
            return $this->render('/error/index', ['msg' => $info_tmp['msg']]);
        }

        $project_list = $info_tmp['project'] ?? [];   //中间项目数据
        $category_list = $info_tmp['class'] ?? [];
        $category_select = $info_tmp['class_info'] ?? [];  //当前分类数据
        $project_r = $info_tmp['project_r'] ?? [];
//var_dump($project_r);die;

        return $this->render('index', [
            'project_list' => $project_list,
            'category_list' => $category_list,
            'category_select' => $category_select,
            'project_r'=>$project_r
        ]);
    }

}