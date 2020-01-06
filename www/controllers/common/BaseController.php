<?php
namespace www\controllers\common;
use common\components\BaseWebController;
use yii\web\Controller;

/**
 * Class BaseController
 * Author: Vincent
 * WeChat: apanly
 * CreateTime: 2019/12/13 10:50
 */
class BaseController extends BaseWebController
{
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->layout = false;
    }
}