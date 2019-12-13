<?php

namespace common\components\helper;

use common\services\BaseService;
use common\services\GlobalUrlService;

class StaticPluginsHelper extends BaseService
{
    protected static $depend = null;

    public static function setDepend($depend = null)
    {
        self::$depend = $depend;
    }

    public static function getDepend()
    {
        return self::$depend;
    }


    public static function select2()
    {
        StaticAssetsHelper::includeAppCssStatic(GlobalUrlService::buildStaticUrl("/plugins/select2/select2.min.css"),
            self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/select2/select2.pinyin.js"),
            self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/select2/zh-CN.js"),
            self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/select2/pinyin.core.js"),
            self::getDepend());
    }

    public static function fancybox()
    {
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/jquery-fancybox/js/jquery.fancybox.pack.js"),
            self::getDepend());
        
        StaticAssetsHelper::includeAppCssStatic(GlobalUrlService::buildStaticUrl("/plugins/jquery-fancybox/css/jquery.fancybox.css"),
            self::getDepend());
    }

    public static function daterangepicker()
    {
        StaticAssetsHelper::includeAppCssStatic(GlobalUrlService::buildStaticUrl("/plugins/daterangepicker/daterangepicker.min.css"),
            self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/daterangepicker/moment.min.js"),
            self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/daterangepicker/jquery.daterangepicker.min.js"),
            self::getDepend());
    }

    public static function qiniuUpload()
    {
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/qiniu/plupload/moxie.min.js"),
            self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/qiniu/plupload/plupload.full.min.js"),
            self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("//plugins/qiniu/plupload/zh_CN.js"),
            self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/qiniu/qiniu.min.js"),
            self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildUCUrl("/js/component/qiniu/upload_qiniu.js"),
            self::getDepend());
    }

    public static function datetimepicker()
    {
        StaticAssetsHelper::includeAppCssStatic(GlobalUrlService::buildStaticUrl("/plugins/datetimepicker/jquery.datetimepicker.min.css"), self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/daterangepicker/moment.min.js"), self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/datetimepicker/jquery.datetimepicker.full.min.js"), self::getDepend());
    }
    public static function wechatScan(){
        StaticAssetsHelper::includeAppJsStatic( "//res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js",self::getDepend() );
    }

    public static function bootstrapTableTree(){
        StaticAssetsHelper::includeAppCssStatic( GlobalUrlService::buildStaticUrl("/plugins/bootstrap-table/bootstrap-table.min.css") ,self::getDepend() );
        StaticAssetsHelper::includeAppJsStatic( GlobalUrlService::buildStaticUrl("/plugins/bootstrap-table/bootstrap-table.min.js") ,self::getDepend() );
        StaticAssetsHelper::includeAppJsStatic( GlobalUrlService::buildStaticUrl("/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js") ,self::getDepend());
        StaticAssetsHelper::includeAppJsStatic( GlobalUrlService::buildStaticUrl("/plugins/bootstrap-treegrid/bootstrap-treegrid.min.js") ,self::getDepend());
    }

    public static function umeditor(){
        StaticAssetsHelper::includeAppCssStatic( GlobalUrlService::buildStaticUrl("/plugins/umeditor/themes/default/css/umeditor.min.css") ,self::getDepend());
        StaticAssetsHelper::includeAppJsStatic( GlobalUrlService::buildStaticUrl("/plugins/umeditor/umeditor.config.js") ,self::getDepend());
        StaticAssetsHelper::includeAppJsStatic( GlobalUrlService::buildStaticUrl("/plugins/umeditor/umeditor.min.js") ,self::getDepend() );
        StaticAssetsHelper::includeAppJsStatic( GlobalUrlService::buildStaticUrl("/plugins/umeditor/lang/zh-cn/zh-cn.js") ,self::getDepend() );
    }

    public static function echarts(){
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/echarts/echarts.min.js"), self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/echarts/china.js"), self::getDepend());
    }



    public static function viewer(){
        StaticAssetsHelper::includeAppCssStatic(GlobalUrlService::buildStaticUrl("/plugins/viewer/viewer.min.css"), self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/viewer/viewer-jquery.min.js"), self::getDepend());
    }

    public static function uicomponents()
    {
        StaticAssetsHelper::includeAppCssStatic(GlobalUrlService::buildStaticUrl("/plugins/jquery_ui_components/jquery-ui.min.css"),
            self::getDepend());
        StaticAssetsHelper::includeAppJsStatic(GlobalUrlService::buildStaticUrl("/plugins/jquery_ui_components/jquery-ui.min.js"),
            self::getDepend());
    }


} 