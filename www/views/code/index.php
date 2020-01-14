<?php
use \common\services\GlobalUrlService;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title?></title>
    <meta name="keywords" content=<?= $title?> >
    <meta name="description" content=<?= $description?> >
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl('/css/style.css')?>" />
    <link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl('/css/show.css')?>" />
    <script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/jquery-1.7.2.min.js')?>"></script>
    <script src="<?=GlobalUrlService::buildWWWUrl('/js/show.js')?>" type="text/javascript"></script>

    <link rel='canonical' href='http://hsh.cn' />

    <style>
        .zsbmain{
            width:1200px;
            margin:0 auto;
        }
        .div_all {
            width: 1200px !important;
        }
        .div_all div {
            height: 165.66px;
        }
    </style>
</head>

<body>
<!-- 头部开始 -->
<?php if ($nav):?>
<?=$nav;?>
<?php endif;?>
<div id="zsbNav">
    <div class="zsbmain">
        <div class="thisBtn">
            <a href="<?=GlobalUrlService::buildWWWUrl('/brand/'.$code)?>" target="_blank" class="active">品牌简介</a>
            <a href="<?=GlobalUrlService::buildWWWUrl('/lybook/'.$code)?>" target="_blank">立即留言</a>
<!--            <a href="##" target="_blank">项目资讯</a>-->
        </div>
    </div>
</div>
<!-- 头部结束 -->
<?= $content; ?>
<!-- 留言板开始 -->
<div style="background:url(/images/lybbj.jpg) no-repeat center; width:1200px; height:550px; margin:0 auto;">
    <script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/fingerprint.js')?>"></script>
    <script type="text/javascript">
        var khid = <?=$khid;?>;
        var sjid = "91";
        var comid = "1001";
        var kw = "_";
        var sid = "";
        var finger = new Fingerprint().get();
    </script>
    <script src="<?=GlobalUrlService::buildWWWUrl('/js/zsb_cc_lyb.js')?>"></script>
</div>
<!-- 留言板结束 -->
 <!--页脚开始-->
    <div id="footer" style="background-color:#FFF;margin:auto;width: 1200px;">
        <div style="text-align: center; line-height:23px; padding:10px 0; background:#fff;">
            技术支持：<?=$footer['company_name']??'';?><br/>
            公司地址：<?=$footer['company_address']??'';?><br/>
            <a href="http://www.beian.miit.gov.cn/" target="_blank"><?=$footer['icp']??'';?></a>
            创业有风险 投资需谨慎
        </div>
        <div style="height:50px;"></div>

        <style type="text/css">
            #footer p a{display:inline-block; width:20px; height:20px;}
            #footer p a img{width:20px; height:20px;}
        </style>
    </div>
<!--页脚结束-->
<!-- 底部固定跳转留言板开始 -->
<div>
    <script type="text/javascript">
        var zxUrl = "https://tb.53kf.com/code/client/<?=$kf_id?>/<?=$kf_style?>";
        var lyUrl = "#lyb";
    </script>
    <?= $page_script?>
    <script src="<?=GlobalUrlService::buildWWWUrl('/js/zsb_cc_fixed.js')?>"></script>
</div>
<!-- 底部固定跳转留言板结束 -->

<script>
    $("#headlogo").attr('src','http://cdn.hsh568.cn/zsbcc/images/logo-hsh-563x108.png');
</script>

</body>
</html>
