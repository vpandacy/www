<?php

use common\services\GlobalUrlService;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>好商汇_汇聚好商机_服务好品牌</title>
    <meta name="keywords" content="招商加盟网官方网站,餐饮加盟,中国餐饮加盟网,小吃加盟网,餐饮加盟网,创业项目,创业商机,创业加盟好项目,连锁加盟好项目,农村创业"/>
    <meta name="description"
          content="，招商外包品牌,渠道招商外包，招商外包平台,面对国内外企业提供全面的招商策划,招商广告推广等一系列外包解决方案,并为企业提供招商外包一站式服务。是一个以招商策划,招商规划,连锁策划,连锁规划,加盟策划,加盟规划的专业策划公司,是企业招商的好帮手。"/>
    <link rel="stylesheet" href="/css/search/base.css"/>
    <!-- 首页样式 -->
    <link rel="stylesheet" href="/css/search/search.css"/>
    <!-- 搜索列表页样式 -->
    <style>
        .itrust {
            width: 1000px;
            margin: 0 auto 8px;
            text-align: center;
        }

        .itrust img {
            display: inline-block !important;
            margin: 0 5px;
        }

        .pagination li {
            height: 20px !important;
            line-height: 20px !important;
            border-radius: 3px !important;
            padding: 2px 8px !important;
            cursor: pointer !important;
            border: 1px solid #ddd !important;
            margin: 0 4px !important;
            color: #707070 !important;
            border-radius: 2px !important;
            font-size: 12px !important;
        }

        .pagination li:hover, .pagination li.active, .pagination li:hover a {
            background-color: #00b6f2 !important;
            color: #fff !important;
        }

        .pagination li a {
            color: #00b6f2 !important;
        }
    </style>
    <!--头部-->
</head>
<body>
<!-- [头部] -->
<div id="header">
    <div class="top">
        <div class="topmain">
            <!--首页的顶部图1-->
            <div class="topNav">
                <ul>
                    <li>
                        <s></s><a href="//wap.hsh.cn">手机版</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="h_com">
        <div class="h_main">
            <div class="logo">
                <!--
                          <a href="/"><img src="" trueImg="picture/4djg.png" alt="" style="width:66px; margin-left:10px;"/></a> -->
                <div class="logoMain">
                    <a href="/"><img src="<?= GlobalUrlService::buildCdnUrl("/zsbcc/images/logo-hsh-563x108.png") ?>"
                                     trueImg="<?= GlobalUrlService::buildCdnUrl("/zsbcc/images/logo-hsh-563x108.png") ?>"
                                     alt=""/></a>
                </div>
            </div>
            <!-- <p class="hots"><a href="/Public/zsbcc06/info1.html" target="_blank">中国互联网协会会员</a>，<a href="http://www.zsb.cc/Public/zsbcc06/info2.html" target="_blank">广东省连锁经营协会</a>会员！</p> -->
            <div class="search">
                <form action="" method="get" target="_blank">
                    <input type="text" class="text" name="keyword" style="width: 210px" value="<?php if ($keyword):?><?= $keyword?><?php else: ?>集成墙<?php endif;?>" placeholder="您想找的项目"/>
                    <input type="submit" class="sub" value="" onclick="if($('.text').val()=='')return false;"/>
                </form>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- [导航条] -->
<div id="nav">
    <div class="navBox">
        <ul>
            <li>
                <a href="/">首页</a></li>
            <li>
                <a href="">特色餐饮</a></li>
            <li>
                <a href="/category/1">环保机械</a></li>
            <li>
                <a href="/category/2">家居建材</a></li>
            <li>
                <a href="/category/3">服装鞋帽</a></li>
            <li>
                <a href="/category/4">集成墙</a></li>
            <li>
                <a href="/category/5">生活服务</a></li>
            <li>
                <a href="/category/6">母婴教育</a></li>
            <li><a href="/category/7">休闲食品</a></li>
            <li><a href="/category/8">农村致富</a></li>
            <li class="last"></li>


        </ul>
        <div class="max_type">
            <div class="typeBox">
                <dl>
                    <dt>
                        <i>
                        </i>快餐加盟
                    </dt>
                    <dd>
                        <a href="/category/97" target="_blank">西式快餐</a>
                        <a href="/category/90" target="_blank">熟食加盟</a>
                        <a href="/category/40" target="_blank">中式快餐</a>
                        <a href="/category/39" target="_blank">韩式快餐</a></dd>
                </dl>
                <dl>
                    <dt>
                        <i>
                        </i>休闲食品
                    </dt>
                    <dd>
                        <a href="/category/96" target="_blank">比萨加盟</a>
                        <a href="/category/91	" target="_blank">甜冰淇淋</a>
                        <a href="/category/93" target="_blank">甜品加盟</a>
                        <a href="/category/136" target="_blank">麻辣烫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <i>
                        </i>特色餐饮
                    </dt>
                    <dd>
                        <a href="/category/98" target="_blank">五谷磨坊</a>
                        <a href="/category/42" target="_blank">烤鸡烤鸭</a>
                        <a href="/category/41" target="_blank">特色烧烤</a>
                        <a href="/category/13" target="_blank">特色小吃</a></dd>
                </dl>
                <dl>
                    <dt>
                        <i>
                        </i>酒水加盟
                    </dt>
                    <dd>
                        <a href="/category/95" target="_blank">红酒加盟</a>
                        <a href="/category/94" target="_blank">白酒加盟</a>
                        <a href="/category/92" target="_blank">奶茶加盟</a>
                        <a href="/category/37" target="_blank">饮料加盟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <i>
                        </i>饰品礼品
                    </dt>
                    <dd>
                        <a href="/category/48" target="_blank">节日礼品</a>
                        <a href="/category/46" target="_blank">工艺礼品</a>
                        <a href="/category/45" target="_blank">女生饰品</a>
                        <a href="/category/84" target="_blank">银饰品</a></dd>
                </dl>
                <dl>
                    <dt>
                        <i>
                        </i>服装加盟
                    </dt>
                    <dd>
                        <a href="/category/51" target="_blank">女装加盟</a>
                        <a href="/category/50" target="_blank">男装加盟</a>
                        <a href="/category/11" target="_blank">童装加盟</a>
                        <a href="/category/53" target="_blank">内衣加盟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <i>
                        </i>建材加盟
                    </dt>
                    <dd>
                        <a href="/category/66" target="_blank">家居日用</a>
                        <a href="/category/61" target="_blank">灯具灯饰</a>
                        <a href="/category/65" target="_blank">液体壁纸</a>
                        <a href="/category/59" target="_blank">装饰装修</a></dd>
                </dl>
                <dl>
                    <dt>
                        <i>
                        </i>环保机械
                    </dt>
                    <dd>
                        <a href="/category/100" target="_blank">食品机械</a>
                        <a href="/category/14" target="_blank">环保材料</a>
                        <a href="/category/15" target="_blank">节能设备</a>
                        <a href="/category/99" target="_blank">榨油机</a></dd>
                </dl>
                <dl>
                    <dt>
                        <i>
                        </i>教育加盟
                    </dt>
                    <dd>
                        <a href="/category/25" target="_blank">教育培训</a>
                        <a href="/category/22" target="_blank">幼儿教育</a>
                        <a href="/category/23" target="_blank">益智玩具</a>
                        <a href="/category/81" target="_blank">儿童乐园</a></dd>
                </dl>
                <dl>
                    <dt>
                        <i>
                        </i>保健加盟
                    </dt>
                    <dd>
                        <a href="/category/32" target="_blank">成人保健</a>
                        <a href="/category/34" target="_blank">视力保健</a>
                        <a href="/category/30" target="_blank">保健仪器</a>
                        <a href="/category/29" target="_blank">保健用品</a></dd>
                </dl>
                <dl>
                    <dt>
                        <i>
                        </i>美容美体
                    </dt>
                    <dd>
                        <a href="/category/79" target="_blank">产后修复</a>
                        <a href="/category/31" target="_blank">瘦身减肥</a>
                        <a href="/category/26" target="_blank">美容美甲</a>
                        <a href="/category/27" target="_blank">化妆品</a></dd>
                </dl>
                <dl>
                    <dt>
                        <i>
                        </i>农村致富
                    </dt>
                    <dd>
                        <a href="/category/71" target="_blank">农村种植</a>
                        <a href="/category/69" target="_blank">虫草种植</a>
                        <a href="/category/77" target="_blank">布艺加工</a>
                        <a href="/category/62" target="_blank">蝎子养殖</a></dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<div id="searchList" class="bottom">
    <div class="searchListmain">
        <div class="listTop">
            <p><i></i>你现在所在的位置：<a href="/" target="_blank">首页</a> &gt; <em><?= $keyword ?></em></p>
        </div>
        <div class="listMain">
            <div class="listMainLeft">
                <div class="listMainLeftBox">
                    <ul>
                        <?php foreach ($project_list as $project): ?>
                            <li>
                                <div class="listContent">
                                    <div class="listContentImg">
                                        <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                           target="_blank"><img
                                                    src="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_416_215.jpg") ?>"
                                                    trueImg="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_416_215.jpg") ?>"
                                                    alt=""/></a>
                                    </div>
                                    <div class="listContentBox">
                                        <h2>
                                            <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"><?= $project['projname'] ?></a><span>关注度：<em>★★★★★</em></span>
                                        </h2>
                                        <p class="listContentBoxInfo"> 行业：<span><?= $project['class_name']; ?></span>区域：<span><?= $project['city'] ?></span>信誉积分：<span><?= rand(2000,
                                                    4000) ?></span>
                                        </p>
                                        <div class="listContentBoxMain">

                                            <p>公司名称：<?= $project['com_name'] ?></p>
                                            <p>项目简介：<?= $project['proj_adv'] ?></p>

                                            <div class="listContentBoxMainBtn">
                                                <span><?= $project['projname'] ?></span>
                                                <div class="listContentBoxMainBtnA">
                                                    <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                                       target="_blank" class="active">查看详情</a>
                                                    <a href="https://tb.53kf.com/code/client/<?= $project['kf_id'] ?>/<?= ($project['kf_type']??0) ?>"
                                                       target="_blank">立即咨询</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="listMainLeftPage">
                    <?= \Yii::$app->view->renderFile("@www/views/common/pagination.php", [
                        'pages' => isset($pages) ? $pages : null,
                        'url' => '/search/index',
                        'search_conditions' => $search_conditions,
                    ]); ?>
                </div>
            </div>
            <div class="listMainRight">
                <div class="listMainRightMian">
                    <div class="listMainRightMianOne">
                        <h3><i></i>大家都在搜<a href="" target="_blank">更多</a></h3>
                        <ul>
                            <?php foreach ($project_r as $_k => $project): ?>
                                <?php if ($_k < 10): ?>
                                    <li><a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                           target="_blank"><?= $project['projname'] ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="listMainRightMianTwo">
                        <h3><i></i>热门商机<a href="" target="_blank">更多</a></h3>
                        <ul>
                            <?php foreach ($project_r as $_k =>$project): ?>
                                <?php if ($_k >= 10 && $_k < 24): ?>
                                    <li><a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"><img
                                                    src="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                                    trueImg="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                                    alt=""/></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="listMainRightMianThree">
                        <h3><i></i>热门推荐<a href="" target="_blank">更多</a></h3>
                        <ul>
                            <?php foreach ($project_r as $_k =>$project): ?>
                                <?php if ($_k >= 24 && $_k < 33): ?>
                                    <li><a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                           target="_blank"><?= $project['projname'] ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="listMainRightMianFour">
                        <h3><i></i>最新专题<a href="" target="_blank">更多</a></h3>
                        <ul>
                            <?php foreach ($project_r as $project): ?>
                                <?php if ($_k == 33 && $_k < 35): ?>
                                    <li><a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                           target="_blank"><?= $project['projname'] ?></a></li>
                                    <li><a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                           target="_blank"><?= $project['projname'] ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- [投资推荐-140*90] -->
<div id="recom" class="bottom">
    <div class="main">
        <div class="recomBox">
            <?php foreach ($project_r as $project): ?>
                <?php if ($_k == 35 && $_k < 43): ?>
                    <dl>
                        <dt>
                            <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                               target="_blank"><img
                                        src="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_140_90.jpg") ?>"
                                        trueImg="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_140_90.jpg") ?>"
                                        alt=""/></a>
                        </dt>
                        <dd>
                            <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>" target="_blank">签年大计&五区后门串串香</a>
                            <span><?= rand(6000, 12000) ?>人关注</span>
                            <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>" target="_blank"
                               class="zixun">咨询</a>
                        </dd>
                    </dl>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- [底部图片96*58] -->
<div id="btnImg" class="bottom">
    <div class="main">
        <ul>
            <div class="clearfix"></div>
        </ul>
    </div>
</div>
<!--页脚-->
<div id="footer">
    <div class="top">
        <div class="topNav">
            <img src="" trueimg="/picture/search/bottom.jpg" alt=""/></div>
    </div>
    <div class="main">
        <div class="mainBox">
            <div class="b_logo">
                <a href="#">
                    <img src="" trueimg="<?= GlobalUrlService::buildCdnUrl('/zsbcc/images/logo-hsh-563x108.png'); ?>"
                         alt=""/></a>
            </div>
            <div class="info">
                <p class="first">
                    <a href="<?= GlobalUrlService::buildWWWUrl("/aboutme") ?>">关于我们</a>|
                    <a href="<?= GlobalUrlService::buildWWWUrl("/legal") ?>">法律声明</a>|
                    <a href="<?= GlobalUrlService::buildWWWUrl("/contactus") ?>">联系我们</a>|
                    <a href="<?= GlobalUrlService::buildWWWUrl("/tssc") ?>">投诉删除</a></p>
                <p>客服电话：<?=$footer['company_tel']??'';?> 创业有风险 投资需谨慎</p>
                <p>技术支持：<?=$footer['company_name']??'';?> ICP备案号：
                    <a href="http://www.beian.miit.gov.cn/" target="_blank"><?=$footer['icp']??'';?></a></p>
            </div>
        </div>
    </div>
    <div class="itrust">
        <a href="http://www.beian.miit.gov.cn" target="_blank"><img src="/picture/search/1.jpg" alt="网站备案"/></a>

    </div>
</div>
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script src="/js/search/utils.js"></script>
<script src="/js/search/mouseover.js"></script>
<!-- 按钮js -->
<script src="/js/search/search.js"></script>
<!-- 搜索列表页js -->
<script>
    $(function () {
        //搜索框
        var a = 0;
        $('#header .h_com .h_main .search .sub').click(function () {
            $(this).siblings('.text').animate({
                'width': '210px'
            }).dequeue();
        });
    });
</script>
<script src="/js/search/href.js"></script>
</body>
</html>
