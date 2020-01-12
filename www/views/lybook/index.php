<?php
use \common\services\GlobalUrlService;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <TITLE><?= $title?></TITLE>
    <meta name="keywords" content="<?= $keywords?>">
    <meta name="description" content="<?= $description?>">
    <link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl('/css/lybook/style_1.css')?>">
    <link rel='canonical' href='http://hsh.cn'/>


    <script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/lybook/uaredirect.js')?>"></script>
    <script type="text/javascript">
        //		uaredirect.init("http://wap.hsh.cn/Wap2/advertInfo?advertId=11953");
    </script>
    <style>
        #main {
            background-color: #fff;
        }

        .zsbmain {
            width: 1000px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<!--头部-->

<link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl('/css/lybook/maozitou.css')?>"/>
<script>
    var widthSize = "1000" + 'px';
    var url = '/l51/';
</script>
<!-- 头部模板 -->
<link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl('/css/show.css')?>"/>        <!-- 首页样式 -->
<script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/jquery-1.7.2.min.js')?>"></script>
<script>

</script>

<script src="<?=GlobalUrlService::buildWWWUrl('/js/show.js')?>" type="text/javascript"></script>


<?=$header;?>

<div id="main">
    <div class="contont">
        <div class="left">
            <img src="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project_info['projid']}/{$project_info['projid']}_240_240.jpg");?>" alt=""/>
        </div>
        <div class="right">
            <div class="title">
                <h1><?=$project_info['projname']?></h1>
                <ul>
                    <li>访问人数：<span>11032人</span></li>
                    <li>咨询人数：<span>735人</span></li>
                    <li>申请加盟：<span>132人</span></li>
                    <div class="clear"></div>
                </ul>
                <em></em>
            </div>
            <div class="right_M">
                <ul>
                    <li class="li1">所属行业：<span><?=$project_info['class_name'];?></span></li>
                    <li class="li5">关注度：<span>11731↑</span></li>
                    <li class="li2">项目资质：<span>三证齐全</span></li>
                    <li class="li3">诚信等级：<span>★★★★★</span></li>
                    <li class="li6">项目评估：<span>优质项目</span></li>
                    <li class="li4">加盟区域：<span>全国</span></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="rightBox">
                <p>公司名称：<?=$project_info['company_name'];?></p>
                <p>公司地址：<?=$project_info['com_addr'];?></p>
                <p>关注度：8012↑</p>
                <p></p>
                <p>免费热线：<strong><?=$project_info['ser_400'];?></strong></p>
                <em></em><!--[勿删]-->
            </div>

        </div>
        <div class="clear"></div>
    </div>

    <!-- 留言板 -->
    <script type="text/javascript">
        var khid = "<?=$project_info['projid'];?>";
        var sjid = "161";
        var comid = "1001";
        var kw = "_";
        var sid = "1";
        var _gname = "<?=$project_info['projname']?>";
    </script>

    <script src="<?=GlobalUrlService::buildWWWUrl('/js/zsb_cc_lyb.js')?>"></script>

    <!-- 联系我们 -->
    <div class="lxwm" style="margin-top:10px;">

        <img src="<?=GlobalUrlService::buildWWWUrl('/picture/flldqg/zb_lxwm1.jpg')?>"></div>


    <div class="txt">
        <ul>

            <?php if($project_list):?>
                <?php foreach ($project_list as $key => $_item):?>
                    <li><a href="<?=GlobalUrlService::buildWWWUrl('/code/'.$_item['code'])?>" target="_blank"><?=$_item['projname']?></a></li>
                <?php endforeach;?>
            <?php endif;?>

            <div class="clear"></div>
        </ul>
    </div>


    <!-- 猜你喜欢 -->
    <div class="hobby">
        <h3>
            <span>猜你喜欢</span>
            <p>同类项目精心挑选，多咨询多比较是成功加盟的关键！<a href="#">查看更多>></a></p>
            <div class="clear"></div>
        </h3>
        <div class="hobbyBox">
            <ul>
                <?php if($project_like):?>
                    <?php foreach ($project_like as $_item):?>
                    <li>
                        <a href="<?=GlobalUrlService::buildWWWUrl('/code/'.$_item['code'])?>">
                            <img src="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$_item['projid']}/{$_item['projid']}_140_90.jpg") ?>" alt="">
                            <dl>
                                <dt><?=$_item['projname']?></dt>
                                <dd><p><?=$_item['proj_abbr']?></p></dd>
                                <dd>投资热度：<span>14098↑</span></dd>
                                <dd><strong>86%</strong>的人浏览过该项目</dd>
                            </dl>
                        </a>
                    </li>
                    <?php endforeach;?>
                <?php endif;?>

                <div class="clear"></div>
            </ul>
        </div>
    </div>


    <div class="xs">
        <h3></h3>
        <div class="xsBox">
            <?php if($project_data):?>
                <?php foreach ($project_data as $_item):?>
                        <a href="<?=GlobalUrlService::buildWWWUrl('/code/'.$_item['code'])?>"><img src="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$_item['projid']}/{$_item['projid']}_logo.jpg") ?>" alt="<?=$_item['projname']?>"></a>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>


</div>

<div id="fixed"></div>

<!--页脚-->
<div id="footer" style="background-color:#FFF;">
    <p>
        <?=$page_script?>
    </p>
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

<script>
    $("#headlogo").attr('src', 'http://cdn.hsh568.cn/zsbcc/images/logo-hsh-563x108.png');
</script>

<script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/lybook/a704e9f363534197be9d072042278512.js')?>"></script>
<script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/lybook/addtoolbar.js')?>"></script>
<script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/lybook/location.js')?>"></script>

<script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/lybook/index.js')?>"></script>
</body>
</html>
