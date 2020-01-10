<?php
/**
 * Class SearchController
 * Author: Vincent
 * WeChat: apanly
 * CreateTime: 2020/1/8 14:59
 */

namespace www\controllers;


use common\services\GlobalUrlService;
use www\controllers\common\BaseController;
use www\services\ApiRequestService;

class SearchController extends BaseController
{

    public function actionIndex()
    {
        $keyword = $this->get('keyword');
        $p = $this->get('p', 1);

        if (!trim($keyword)){
            return $this->redirect(GlobalUrlService::buildWWWUrl('/'));
        }

        $info = ApiRequestService::sendPostRequest('/lianzhan/search/index', [
            "keyword" => $keyword,
            "p" => $p
        ]);
        if (!$info) {
            return $this->render('/error/index', ['msg' => ApiRequestService::getLastErrorMsg()]);
        }

        $info_tmp = $info['data'];
        if (!$info_tmp) {
            return $this->render('/error/index', ['msg' => $info_tmp['msg']]);
        }

        $project_list = $info_tmp['project'] ?? [];   //中间项目数据
        $project_r = $info_tmp['project_r'] ?? [];
        $pages = $info_tmp['pages'] ?? [];

        return $this->render('index', [
            'project_list' => $project_list,
            'project_r' => $project_r,
            'pages' => $pages,
            'keyword'=>$keyword,
            'search_conditions' => [
                'keyword'=>$keyword
            ],
            'footer' => $this->website_info,
        ]);
    }
}