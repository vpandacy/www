<?php

namespace www\controllers;


use common\components\BaseWebController;

class PageController extends BaseWebController
{
    public function actionIndex()
    {
        $media_id = $this->get('media_id');
        $project_id = $this->get('project_id');
        var_dump($media_id);var_dump($project_id);
        die;
        return $this->render('index');
    }
}