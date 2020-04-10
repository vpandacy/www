<?php


namespace www\controllers;


use common\components\helper\RmdirHelper;
use common\components\HttpClient;
use www\controllers\common\BaseController;
use www\services\ApiRequestService;

class ShowController extends BaseController
{

    public $channel = [0=>'default',10=>'baidu',20=>'360'];
    public $app_map = [1=>'lz',6=>'dw'];
    public $terminal_map = [5=>'pc',10=>'wap'];
    public function actionIndex()
    {

        $this->layout = false;

        $code = $this->get('code');


        $info = ApiRequestService::sendPostRequest('/lianzhan/show/index',[
            "code" => $code
        ]);
        if (!$info) {
            return $this->render('/error/index', ['msg' => ApiRequestService::getLastErrorMsg()]);
        }

        $info_tmp = $info;

        if (!$info_tmp['data']) {
            return $this->render('/error/index', ['msg' => '返回参数不正确']);
        }
        $host = \Yii::$app->params['domains']['cdn_hsh']['domain'];
        $data = json_decode($info_tmp['data'], true);
        if (!$data){
            return $this->render('/error/index', ['msg' => '返回信息有误']);
        }

        $channel = $this->channel[$data['page']['channel']] ?? 'default';
        $app = $this->app_map[$data['app_id']]??'lz';
        $terminal_id = $data['page']['terminal_id'] ?? 5;
        $terminal = $this->terminal_map[$terminal_id] ?? 'wap';
        $new_path = $app."/".$data['page']['project_id'].'/'.$terminal.'/'.$channel.'/item.html';

        $file_path = \Yii::$app->params['file_path'].$new_path;

        $html = @file_get_contents($file_path);
        //$html = 0;
        if ($html){
            return $html;
        }

        $host = $host.'/'.$new_path;
        $host = 'http://cdn.hsh568.cn/lz/195518/wap/default/item.html';
        $content = HttpClient::get($host);

        if (!$content){
            return $this->render('/error/index', ['msg' => '页面不存在']);
        }

        $dir_path = trim($file_path,'item.html');
        //判断文件夹是否存在
        if (!is_dir($dir_path)){
            mkdir($dir_path,0777,true);
        }

        //处理头部
        $head_path = \Yii::$app->params['file_path']."head/head_$terminal_id.html";
        $head = @file_get_contents($head_path);
        if ($head){
            $content = $head.$content;
        }

        //处理footer
        $footer_path = \Yii::$app->params['file_path'].'footer/footer.html';
        $footer_content = @file_get_contents($footer_path);
        $footer_content = str_replace('@kf_style@',$data['media_kf']['kf_style'],$footer_content);
        $footer_content = str_replace('@kf_id@',$data['media_kf']['kf_id'],$footer_content);
        $footer_content = str_replace('@page_script@',$data['page_script'],$footer_content);
        $content = str_replace('@title@',$data['media_kf']['project_id'].$data['project_pinyin'],$content);
        $content = $content.$footer_content;

        //处理icp
        $icp = $this->website_info;
        $content = str_replace('@company_name@',$icp['company_name'],$content);
        $content = str_replace('@company_address@',$icp['company_address'],$content);
        $content = str_replace('@icp@',$icp['icp'],$content);

        //处理域名
        $domain = \Yii::$app->params['domains']['www']['domain'];
        $content = str_replace('@domain@',$domain,$content);
        //放
        @file_put_contents($file_path,$content);
        return $content;

    }

    //清除缓存
    public function actionClean()
    {
        $code = $this->get('code');
        $info = ApiRequestService::sendPostRequest('/lianzhan/show/index',[
            "code" => $code
        ]);
        $data = json_decode($info['data'], true);

        $channel = $this->channel[$data['page']['channel']] ?? '';
        $app = $this->app_map[$data['app_id']] ?? '';
        $terminal = $this->terminal_map[$data['page']['channel']] ?? '';

        if (!$app || !$channel || !$terminal){
            return $this->renderJSON();
        }
        $new_path = $app."/".$data['page']['project_id'].'/'.$terminal.'/'.$channel;
        $file_path = \Yii::$app->params['file_path'].$new_path;

        return RmdirHelper::deldir_($file_path) ? $this->renderJSON() : $this->renderErrJSON();


    }
}