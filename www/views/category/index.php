<?php

use common\services\GlobalUrlService;

?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8"/>
    <title>特色餐饮项目大全_好商汇网</title>
    <meta name="keywords" content="招商加盟网官方网站,餐饮加盟,中国餐饮加盟网,小吃加盟网,餐饮加盟网,创业项目,创业商机,创业加盟好项目,连锁加盟好项目,农村创业"/>
    <meta name="description"
          content="，招商外包品牌,渠道招商外包，招商外包平台,面对国内外企业提供全面的招商策划,招商广告推广等一系列外包解决方案,并为企业提供招商外包一站式服务。是一个以招商策划,招商规划,连锁策划,连锁规划,加盟策划,加盟规划的专业策划公司,是企业招商的好帮手。"/>
    <link rel="stylesheet" href="/css/company/base_1.css"/>
    <!-- 首页样式 -->
    <link rel="stylesheet" href="/css/company/pro.css"/>
    <style>.itrust {
            width: 1000px;
            margin: 0 auto 8px;
            text-align: center;
        }

        .itrust img {
            display: inline-block !important;
            margin: 0 5px;
        }</style>
    <!--头部--></head>

<body>
<!-- [头部] -->
<div id="header">
    <div class="top">
        <div class="topmain">
            <!--首页的顶部图1-->
            <div class="topNav">
                <ul>
                    <li>
                        <s>
                        </s>
                        <a href="//wap.hsh.cn">手机版</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="h_com">
        <div class="h_main">
            <div class="logo">
                <div class="logoMain">
                    <a href="/">
                        <img src="" trueimg="http://cdn.hsh568.cn/zsbcc/images/logo-hsh-563x108.png" alt=""/></a>
                </div>
            </div>
            <div class="search">
                <form action="/search" method="get" target="_blank">
                    <input type="text" class="text" name="keyword" value="" placeholder="您想找的项目"/>
                    <input type="submit" class="sub" value="" onclick="if($('.text').val()=='')return false;"/></form>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- [导航条] -->
<!-- [导航条] -->
<?= \Yii::$app->view->renderFile("@www/views/common/nav.php"); ?>
<!-- [分类] -->
<div id="type" class="bottom">
    <div class="main">
        <div class="left">
            <dl class="myc">
                <dt>
                    <i></i>商机精分
                </dt>
                <dd>

                    <a href="<?= GlobalUrlService::buildWWWUrl("/category/{$category_select['classid']}"); ?>"
                       class="<?php if ($category_select['classid'] == $id): ?>active<?php endif; ?>"><?= $category_select['class_name']; ?></a>
                    <?php foreach ($category_select['child'] as $_key => $content): ?>
                        <?php if ($_key < 5): ?>
                            <a href="<?= GlobalUrlService::buildWWWUrl("/category/{$content['classid']}") ?>"
                               class="<?php if ($content['classid'] == $id): ?>active<?php endif; ?>"><?= $content['class_name']; ?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </dd>
            </dl>
            <dl class="myc">
                <dt></dt>
                <dd>
                    <?php foreach ($category_select['child'] as $_key => $content): ?>
                        <?php if ($_key > 5 && $_key < 10): ?>
                            <a href="<?= GlobalUrlService::buildWWWUrl("/category/{$content['classid']}") ?>"
                               class="<?php if ($content['classid'] == $id): ?>active<?php endif; ?>"><?= $content['class_name']; ?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </dd>
            </dl>
            <dl>
                <dt>
                    <i>
                    </i>热门商机
                </dt>
                <dd>
                    <a href="<?= GlobalUrlService::buildWWWUrl("/category/{$id}/sort/最热") ?>" class="<?php if ($sort == '最热'): ?>active<?php endif; ?>">最热</a>
                    <a href="<?= GlobalUrlService::buildWWWUrl("/category/{$id}/sort/人气") ?>" class="<?php if ($sort == '人气'): ?>active<?php endif; ?>">人气</a>
                    <a href="<?= GlobalUrlService::buildWWWUrl("/category/{$id}/sort/最新") ?>" class="<?php if ($sort == '最新'): ?>active<?php endif; ?>">最新</a>
                    <a href="<?= GlobalUrlService::buildWWWUrl("/category/{$id}/sort/推荐") ?>" class="<?php if ($sort == '推荐'): ?>active<?php endif; ?>">推荐</a>
                </dd>
            </dl>
        </div>
        <div class="right">
            <?php foreach ($project_r as $_k => $project): ?>
                <?php if ($_k < 4): ?>
                    <dl>
                        <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>" target="_blank">
                            <dt>
                                <img src="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_140_90.jpg") ?>"
                                     trueimg="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_140_90.jpg") ?>"
                                     alt=""/>
                            </dt>
                            <dd><?= $project['projname'] ?></dd>
                        </a>
                    </dl>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- [内页主题-] -->
<div id="title" class="bottom">
    <div class="main">
        <h2><i></i><?=$category_info['class_name']?></h2>
        <p><?=$category_info['class_des']?></p>
    </div>
</div>
<!-- 内页项目列表 -->
<div id="content" class="bottom">
    <div class="main">
        <div class="mainBox">
            <ul>
                <?php foreach ($project_list as $_k => $project): ?>
                    <?php if ($_k <= 30): ?>
                        <li>
                            <div class="light"></div>
                            <div class="l_Img"><a
                                        href=<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?> target="_blank"><img
                                            src="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_416_215.jpg") ?>"
                                            trueimg='<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_416_215.jpg") ?>'
                                            alt="<?= $project['projname'] ?>"/></a></div>
                            <div class="l_txt">
                                <h3>
                                    <a href="<?= GlobalUrlService::buildWWWUrl("/code/" . $project['code']) ?> "><?= $project['projname'] ?></a>
                                </h3>
                                <p><?= $project['projname'] ?></p>
                            </div>
                            <div class="l_info">
                                <dl>
                                    <dd>关注：<span>★★★★</span></dd>
                                    <dd>积分：<span><?= rand(6000, 10000) ?></span></dd>
                                    <dd>行业：<span><?= $project['class_name'] ?></span></dd>
                                    <dd><span><?= $project['city']; ?></span></dd>
                                </dl>
                            </div>
                            <div class="l_btn">
                                <a href="<?= "/code/{$project['code']}" ?>" target="_blank">查看详情</a>
                                <a href="<?= GlobalUrlService::buildWWWUrl("/code/" . $project['code']) ?>"
                                   target="_blank" class="active">立即咨询</a>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
</div>
<!-- 感兴趣的项目-受欢迎的项目 -->
<div id="list" class="bottom">
    <div class="main">
        <div class="top">
            <ul>
                <li class="active">您可能感兴趣的项目</li>
                <li>本周最受关注的项目</li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="mainBox">
            <div class="first" style="display:block;">
                <?php foreach ($project_r as $_k => $project): ?>
                    <?php if ($_k >= 4 && $_k < 40): ?>
                        <dl>
                            <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                               target="_blank"></a>
                            <dt><a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                   target="_blank"></a>
                                <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                   target="_blank">
                                    <img src="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_140_90.jpg") ?>"
                                         trueimg="<?= GlobalUrlService::buildCdnUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_140_90.jpg") ?>"
                                         alt="" style="display: block"/></a></dt>
                            <dd><a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                   target="_blank"><?= $project['projname'] ?></a></dd>
                        </dl>
                    <?php endif; ?>
                <?php endforeach; ?>
                <div class="clearfix"></div>
            </div>
            <div class="second">
                <div class="secondCom">
                    <ul>
                        <?php foreach ($project_r as $_k => $project): ?>
                            <?php if ($_k < 12): ?>
                                <li class="<?php if ($_k == 0): ?>active<?php endif; ?>">
                                    <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                       target="_blank">
                                        <img src="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             trueimg="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             alt=""
                                             style="display: block; height: <?php if ($_k == 0): ?>90px<?php endif; ?>;"/>
                                        <span><?= $project['projname'] ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <ul>
                        <?php foreach ($project_r as $_k => $project): ?>
                            <?php if ($_k >= 12 && $_k < 24): ?>
                                <li class="<?php if ($_k == 14): ?>active<?php endif; ?>">
                                    <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                       target="_blank">
                                        <img src="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             trueimg="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             alt=""
                                             style="display: block; height: <?php if ($_k == 14): ?>90px<?php endif; ?>;"/>
                                        <span><?= $project['projname'] ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <ul>
                        <?php foreach ($project_r as $_k => $project): ?>
                            <?php if ($_k >= 24 && $_k < 36): ?>
                                <li class="<?php if ($_k == 28): ?>active<?php endif; ?>">
                                    <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                       target="_blank">
                                        <img src="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             trueimg="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             alt=""
                                             style="display: block; height: <?php if ($_k == 28): ?>90px<?php endif; ?>;"/>
                                        <span><?= $project['projname'] ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <ul>
                        <?php foreach ($project_r as $_k => $project): ?>
                            <?php if ($_k >= 36 && $_k < 48): ?>
                                <li class="<?php if ($_k == 42): ?>active<?php endif; ?>">
                                    <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                       target="_blank">
                                        <img src="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             trueimg="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             alt=""
                                             style="display: block; height: <?php if ($_k == 42): ?>90px<?php endif; ?>;"/>
                                        <span><?= $project['projname'] ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <ul>
                        <?php foreach ($project_r as $_k => $project): ?>
                            <?php if ($_k >= 48 && $_k < 60): ?>
                                <li class="<?php if ($_k == 56): ?>active<?php endif; ?>">
                                    <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                       target="_blank">
                                        <img src="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             trueimg="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             alt=""
                                             style="display: block; height: <?php if ($_k == 56): ?>90px<?php endif; ?>;"/>
                                        <span><?= $project['projname'] ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <ul>
                        <?php foreach ($project_r as $_k => $project): ?>
                            <?php if ($_k >= 60 && $_k < 72): ?>
                                <li class="<?php if ($_k == 70): ?>active<?php endif; ?>">
                                    <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                       target="_blank">
                                        <img src="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             trueimg="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             alt=""
                                             style="display: block; height: <?php if ($_k == 70): ?>px<?php endif; ?>;"/>
                                        <span><?= $project['projname'] ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <ul>
                        <?php foreach ($project_r as $_k => $project): ?>
                            <?php if ($_k >= 72 && $_k < 84): ?>
                                <li class="<?php if ($_k == 83): ?>active<?php endif; ?>">
                                    <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                       target="_blank">
                                        <img src="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             trueimg="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             alt=""
                                             style="display: block; height: <?php if ($_k == 83): ?>90px<?php endif; ?>;"/>
                                        <span><?= $project['projname'] ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <ul>
                        <?php foreach ($project_r as $_k => $project): ?>
                            <?php if ($_k >= 84 && $_k < 96): ?>
                                <li class="<?php if ($_k == 84): ?>active<?php endif; ?>">
                                    <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$project['code']}") ?>"
                                       target="_blank">
                                        <img src="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             trueimg="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_logo.jpg") ?>"
                                             alt=""
                                             style="display: block; height: <?php if ($_k == 84): ?>90px<?php endif; ?>;"/>
                                        <span><?= $project['projname'] ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [投资推荐1-140*90] -->
<div id="recom" class="bottom">
    <div class="main">
        <div class="recomBox">
            <?php foreach ($project_end as $item): ?>
                <dl>
                    <dt><a href="<?= GlobalUrlService::buildWWWUrl("/code/{$item['code']}") ?>" target="_blank"><img
                                    src="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_140_90.jpg") ?>"
                                    trueimg="<?= GlobalUrlService::buildWWWUrl("/zsbccimg/{$project['projid']}/{$project['projid']}_140_90.jpg") ?>"
                                    alt=""/></a></dt>
                    <dd>
                        <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$item['code']}") ?>"
                           target="_blank"><?= $item['projname'] ?></a>
                        <span><?= rand(6000, 15000) ?>人关注</span>
                        <a href="<?= GlobalUrlService::buildWWWUrl("/code/{$item['code']}") ?>" target="_blank"
                           class="zixun">咨询</a>
                    </dd>
                </dl>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- [底部图片96*58] -->
<div id="btnImg" class="bottom">
    <div class="main">
        <ul>
            <ul>
            </ul>
            <div class="clearfix"></div>
        </ul>
    </div>
</div>
<!--页脚-->
<div id="footer">
    <div class="top">
        <div class="topNav">
            <img src="" trueimg="/static/theme/editTheme6/picture/bottom.jpg" alt=""/></div>
    </div>
    <div class="main">
        <div class="mainBox">
            <div class="b_logo">
                <a href="#">
                    <img src="" trueimg="http://cdn.hsh568.cn/zsbcc/images/logo-hsh-563x108.png" alt=""/></a>
            </div>
            <div class="info">
                <p class="first">
                    <a href="/aboutme">关于我们</a>|
                    <a href="/legal">法律声明</a>|
                    <a href="/contactus">联系我们</a>|
                    <a href="/tssc">投诉删除</a></p>
                <p>客服电话：<?=$footer['company_tel']??'';?> 创业有风险 投资需谨慎</p>
                <p>技术支持：<?=$footer['company_name']??'';?> ICP备案号：
                    <a href="http://www.beian.miit.gov.cn/" target="_blank"><?=$footer['icp']??'';?></a></p>
            </div>
        </div>
    </div>
    <div class="itrust">
        <a href="http://www.beian.miit.gov.cn" target="_blank"><img src="/picture/company/1.jpg" alt="网站备案"/></a>

    </div>
</div>
<script type="text/javascript" src="/js/company/jquery-1.7.2.min.js"></script>
<script>if ($("#type .main .left .myc a[data-v=1]").length > 0) {
        $("#type .main .left .myc a").removeClass('active');
        $("#type .main .left .myc a[data-v=1]").addClass('active');
    }
    $(function () {
        //搜索框
        var a = 0;
        $('#header .h_com .h_main .search .sub').click(function () {
            $(this).siblings('.text').animate({
                'width': '210px'
            }).dequeue();
        });
    });</script>
<script src="/js/company/utils.js"></script>
<script src="/js/company/pro.js"></script>
<script src="/js/company/mouseover.js"></script>
<script src="/js/company/href.js"></script>
</body>

</html>