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
        $id = $this->get('id', 0);
        $sort = $this->get('sort', '最热');

        $info = ApiRequestService::sendPostRequest('/lianzhan/type/index', [
            "id" => $id,
            'sort' => $sort
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
        $category_info_tmp = $info_tmp['class_info'] ?? [];  //当前分类数据
        $fid = $category_info_tmp['fid'] ?? 0;
        $class_id = $category_info_tmp['classid'] ?? 0;
        $fid = $fid ?: $class_id;

        $project_r = $info_tmp['project_r'] ?? [];
        if ($project_r && count($project_r) > 8) {
            $project_end = array_rand($project_r, 8);
        } else {
            $project_end = $project_r;
        }
        $category_select = [];
        foreach ($category_list as $item) {
            if ($item['classid'] != $fid) {
                continue;
            }
            $category_select = $item;
            break;
        }

        return $this->render('index', [
            'project_list' => $project_list,
            'category_list' => $category_list,
            'category_info' => $category_info_tmp,
            'category_select' => $category_select,
            'project_r' => $project_r,
            'project_end' => $project_end,
            'id' => $class_id,
            'sort' => $sort
        ]);
    }

}