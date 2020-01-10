<?php
use \common\services\GlobalUrlService;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl('/css/brand/style.css')?>" />
    <link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl('/css/brand/lyb.css')?>" />
    <title><?= $title?> </title>
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="description" content="<?=$description?>">
</head>
<body>

<!--头部-->
<!--头部-->
<link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl('/css/brand/maozitou.css')?>" />

<style>
    .zsbmain{
        width:1000px;
        margin:0 auto;
    }


</style>
<!-- 头部模板 -->
<link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl('/css/show.css')?>" />        <!-- 首页样式 -->
<script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/jquery-1.7.2.min.js')?>"></script>
<script src="<?=GlobalUrlService::buildWWWUrl('/js/brand/show.js')?>" type="text/javascript"></script>

<?=$header?>

<div id="zsbTxt" style="margin-top:0; ">
    <div class="zsbmain">
<div class="zsbInfo">
    <div class="zsbInfoCom">
        <div class="zsbInfoComH">
            <dl>
                <dt><img src="/picture/flldqg/195588_logo.jpg" alt="" /></dt>
                <dd>
                    <strong><?=$project_info['projname']?></strong>
                    <p>热度：<span>★★★★★</span></p>
                </dd>
            </dl>
        </div>
        <div class="zsbInfoComL">
            <ul>
                <li class="gzd">关注度<br /><span>25090</span></li>
                <li class="zxs">咨询数<br /><span>16477</span></li>
                <li class="zsqy">招商区域<br /><span>全国</span></li>
                <li class="jmdl">合作模式<br /><span>合作代理</span></li>
            </ul>
        </div>
    </div>
    <div class="zsbBtn">
        <a href="<?=GlobalUrlService::buildWWWUrl('/code/'.$code)?>_" target="_blank">查看详情</a>
        <a href="http://www10.53kf.com/webCompany.php?kf_sign=DEyNzMTU2MI2NjEwODkyNzIxNDQ4MDA3NzIxNDA4NjU=&arg=<?=$kf_id?>&style=<?=$kf_style?>&language=zh-cn" target="_blank" class="active">立即咨询</a>
    </div>
</div>
    </div>
</div>


<div id="zsbNav">
    <div class="zsbmain">
        <div class="thisBtn">
            <a href="<?=GlobalUrlService::buildWWWUrl('/brand/'.$code)?>" target="_blank" class="active">品牌简介</a>
            <a href="<?=GlobalUrlService::buildWWWUrl('/lybook/'.$code)?>" target="_blank">立即留言</a>
            <!--            <a href="##" target="_blank">项目资讯</a>-->
        </div>
    </div>
</div>
<div class="content">

    <div class="left">

        <div class="info">
            <h3>企业信息</h3>
            <div class="infoBox">
                <img src="/picture/flldqg/195588_416_215.jpg" alt="">
                <ul>
                    <li><h2><?=$project_info['company_name']?></h2></li>
                    <li><b>关注度：</b><span>21447</span></li>
                    <li><b>所属区域：</b><span><?=$project_info['com_area'];?></span></li>
                    <li><b>推荐指数：</b><span>5</span></li>
                    <li><b>客服热线：</b><span><?=$project_info['ser_400'];?></span></li>
                </ul>
                <!--            <p><b>项目点评：</b>达芬奇系列产品已通过建筑材料测试中心、建筑防火产品安全质量监督检验中心、家具及室内环境质量监督检验中心等部门检测为合格产品，并荣获多项荣誉称号, 且拥有多项自主知识产权，是目前国内优异的集成墙饰供应商之一，达芬奇积极研发顺应国际趋势的创意产品，获得海内外客户一致好评。</p> -->
            </div>
        </div>

        <div class="pro">
            <h3>同类项目合作排行</h3>
            <div class="proBox">
                <ul>
                    <?php if($project_list):?>
                        <?php foreach ($project_list as $_key => $_item):?>
                    <li><em class="m1">9919</em>
                        <a href="<?=GlobalUrlService::buildWWWUrl('/code/'.$_item['projid'])?>"><?=$_item['projname']?></a><span><?=$_key?></span>
                    </li>
                            <?php endforeach;?>
                    <?php endif;?>

                </ul>
            </div>
        </div>

        <div class="news">
            <h3>最新项目资讯</h3>
            <div class="newsBox">

                <ul>
                    <li><a href="/flldqg/news/43945" target="_blank">法罗兰顿轻钢别墅 专注用户需求，带来高品质的居家生活</a></li>
                    <li><a href="/flldqg/news/43923" target="_blank">选择法罗兰顿轻钢别墅 轻松享受健康美好生活</a></li>
                    <li><a href="/flldqg/news/43903" target="_blank">法罗兰顿轻钢别墅 未来乡镇自建房优选品牌</a></li>
                    <li><a href="/flldqg/news/43883" target="_blank">法罗兰顿轻钢别墅 用心创造高品质的别墅生活</a></li>
                    <li><a href="/flldqg/news/43859" target="_blank">轻钢别墅质量不可靠？来看看法罗兰顿轻钢别墅吧</a></li>
                    <li><a href="/flldqg/news/43841" target="_blank">法罗兰顿轻钢别墅 独一无二的设计，让生活美出新高度</a></li>
                    <li><a href="/flldqg/news/43820" target="_blank">法罗兰顿轻钢别墅  超越经典品质超越先锋意蕴</a></li>
                    <li><a href="/flldqg/news/43799" target="_blank">法罗兰顿轻钢别墅创新科技，致力建造更宜居的品质别墅</a></li>
                    <li><a href="/flldqg/news/43777" target="_blank">法罗兰顿轻钢别墅 建造别墅从心感觉</a></li>
                    <li><a href="/flldqg/news/43754" target="_blank">法罗兰顿轻钢别墅 颠覆传统的建造模式备受创业者关注</a></li>
                    <li><a href="/flldqg/news/43733" target="_blank">法罗兰顿轻钢别墅 为消费者提供优雅的居住环境</a></li>
                    <li><a href="/flldqg/news/43710" target="_blank">法罗兰顿轻钢别墅 完美满足消费者对宜居环保建筑的需求</a></li>
                    <li><a href="/flldqg/news/43690" target="_blank">法罗兰顿轻钢别墅优势出众 当代装配式环保建筑领域领导者</a></li>
                    <li><a href="/flldqg/news/43670" target="_blank">法罗兰顿轻钢别墅 不断创新力求打造更适合国人居住的别墅</a></li>
                    <li><a href="/flldqg/news/43646" target="_blank">法罗兰顿轻钢别墅 个性定制生态环保型新式住宅</a></li>
                </ul>

            </div>
        </div>


    </div>

    <div class="right">
        <div class="rightBoxTop">
            <h3><span>项目名称：</span><?=$project_info['projname']?></h3>
            <div class="zsbBox">
                <ul>
                    <li class="active">品牌简介</li>
                    <li>项目介绍</li>
                    <li>合作政策</li>
                    <li>合作流程</li>
                    <div class="clear"></div>
                </ul>
                <dl>
                    <dd style="display:block;">
                        法罗兰顿轻钢别墅，总部是一家专业研发、生产、销售集装箱房、钢结构、轻钢别墅、活动板房、彩钢板生产、组装集成式建筑、售后服务于一体的绿色环保综合型创新技术企业，安装钢结构20万㎡，组装各类轻钢别墅30万㎡，年产各类彩钢板60万㎡，建材产品远销国内外50多国和地区。                                                </dd>

                    <dd>
                        　法罗兰顿轻钢别墅，凭借严谨的设计，独特的节能环保材料，严格的施工工艺，完善的售后服务，出众的品质迅速席卷全国。在国内率先实现了绿色、环保、节能型钢结构集成住宅新突破，打破了传统住宅工程建筑模式，完全实现了住宅标准化、设计通用化、生产工业化、安装一体化，服务便捷化。                                                </dd>

                    <dd>
                        法罗兰顿轻钢别墅施工期短，建设成本低，需要人工少。市场巨大，上千房型满足各功能建房需求，自有工厂自主研发技术打造质优轻钢建材产品，一站式定制别墅，所有建材模块流水下线定制，全套配送到施工地；施工团队上门指导，帮筹建团队，教经营策划，派送区域订单，并提供全方位售后服务。                                                </dd>

                    <dd>
                        据统计，一般县级人口约在80万、乡村人口占比70%以上，预建房屋占人口比例为3%。县级乡镇年新建房屋约1万7千套。法罗兰顿轻钢别墅代理商年完成签约100套，按照每套房除去开销成本保守估计3-4万计算，年预计营收非常乐观。                                                </dd>
                </dl>
            </div>
        </div>

        <div class="rightBoxBottom">
            <!--留言板-->
            <a name="MessAge"></a>
            <script type="text/javascript">
                var khid="<?=$khid?>";   //id
                var sjid="161";   //id
                var _gname="<?=$project_info['projname']?>";   //id
                var kw="_";   //id
            </script>

            <script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/brand/message.js')?>"></script>
            <link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl('/css/brand/message.css')?>" />
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>


<script>
    $("#headlogo").attr('src','http://cdn.hsh568.cn/zsbcc/images/logo-hsh-563x108.png');
</script>
<!--页脚-->
<div id="footer" style="width:100%; background:#f9f9f9; margin:0 auto; text-align:center; line-height:24px; border-top:1px solid #eee; padding:10px 0; ">
    <div style="text-align: center; line-height:23px; padding:10px 0; background:#fff;">
        技术支持：<?=$footer['company_name']??'';?><br/>
        公司地址：<?=$footer['company_address']??'';?><br/>
        <a href="http://www.beian.miit.gov.cn/" target="_blank"><?=$footer['icp']??'';?></a>
        创业有风险 投资需谨慎
    </div>

    <style type="text/css">
        #footer p a{display:inline-block; width:20px; height:20px;}
        #footer p a img{width:20px; height:20px;}
    </style>
</div>

<link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl('/css/brand/zsb.css')?>" />
<script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/brand/text_tab.js')?>"></script>
<script type="text/javascript" src="<?=GlobalUrlService::buildWWWUrl('/js/brand/lyb.js')?>"></script>
</body>
</html>
