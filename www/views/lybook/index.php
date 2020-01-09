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
            <img src="<?=GlobalUrlService::buildWWWUrl('/picture/flldqg/195588_240_240.jpg')?>" alt=""/>
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
            <li><a href="/show/liangyisheng1" target="_blank">亮一生视力康复</a></li>
            <li><a href="/show/zbnqgbs" target="_blank">尊百年智能轻钢别墅</a></li>
            <li><a href="/show/oushangjia" target="_blank">更多应用 满足需求</a></li>
            <li><a href="/show/jianmeijia" target="_blank">环保全屋整装</a></li>
            <li><a href="/show/tiancheng" target="_blank">天诚全屋整装</a></li>
            <li class="red"><a href="/show/ruomu" target="_blank">引领潮流 开创时代</a></li>
            <li class="red"><a href="/show/jiajieshi" target="_blank">佳洁士垃圾处理器</a></li>
            <li class="red"><a href="/show/wajiangqingwa" target="_blank">蛙匠青蛙养殖</a></li>
            <li class="red"><a href="/show/mofashikb" target="_blank">魔法师烤吧</a></li>
            <li class="red"><a href="/show/zcydzsj" target="_blank">中驰移动制砂机</a></li>
            <li><a href="/show/oukate" target="_blank">环保健康，扣式整装</a></li>
            <li><a href="/show/nanyang" target="_blank">南阳重工制砂机</a></li>
            <li><a href="/show/yunixiangban" target="_blank">集美味营养、健康绿色</a></li>
            <li><a href="/show/tangeche" target="_blank">1成首付弹个车</a></li>
            <li><a href="/show/xiangnianjia" target="_blank">想念家的味道饺子</a></li>
            <li class="red"><a href="/show/pujitai" target="_blank">普吉泰茶</a></li>
            <li class="red"><a href="/show/zhongnongbahao" target="_blank">1</a></li>
            <li class="red"><a href="/show/yaogunguozhi" target="_blank">摇滚果汁</a></li>
            <li class="red"><a href="/show/yishikang" target="_blank">美好新视界 财富新商机</a></li>
            <li class="red"><a href="/show/shishang" target="_blank">22时尚加盟</a></li>
            <li><a href="/show/ailuoni" target="_blank">艾洛尼环保集成墙饰</a></li>
            <li><a href="/show/haozhouquan" target="_blank">刚性需求，席卷市场</a></li>
            <li><a href="/show/pengpengyu" target="_blank">批量出餐无需大厨</a></li>
            <li><a href="/show/xiangwanli" target="_blank">香万利环保制香机</a></li>
            <li><a href="/show/langshajichengqiang" target="_blank"> 你与事业 一“墙”之隔</a></li>
            <li class="red"><a href="/show/tianyaojiuhao" target="_blank">天耀9号泥鳅加盟</a></li>
            <li class="red"><a href="/show/daancha5" target="_blank">0</a></li>
            <li class="red"><a href="/show/baijiazhoupu" target="_blank">知名品牌风靡中国</a></li>
            <li class="red"><a href="/show/hjggzz" target="_blank">一站全屋 智能整装</a></li>
            <li class="red"><a href="/show/nuolian" target="_blank">诺恋冰淇淋真美味！</a></li>
            <li><a href="/show/shiermei" target="_blank">优质环保墙饰，免门店投资</a></li>
            <li><a href="/show/baijintequ" target="_blank">白金特曲 直招代理</a></li>
            <li><a href="/show/kabeinuo" target="_blank">卡贝诺加盟</a></li>
            <li><a href="/show/zouxiujipai" target="_blank">走秀鸡排，可赢未来！</a></li>
            <li><a href="/show/fafeiya" target="_blank">法菲亚全屋整装</a></li>
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
                <li>
                    <a href="/show/tunaikeqiangyi">
                        <img src="/picture/flldqg/189786_140_90.jpg" alt="">
                        <dl>
                            <dt>涂奈克墙衣</dt>
                            <dd><p>涂奈克墙衣</p></dd>
                            <dd>投资热度：<span>14098↑</span></dd>
                            <dd><strong>86%</strong>的人浏览过该项目</dd>
                        </dl>
                    </a>
                </li>
                <li>
                    <a href="/show/qvzzzh">
                        <img src="/picture/flldqg/999907_140_90.jpg" alt="">
                        <dl>
                            <dt>畅家全铝百度</dt>
                            <dd><p>畅家全铝家居</p></dd>
                            <dd>投资热度：<span>14677↑</span></dd>
                            <dd><strong>86%</strong>的人浏览过该项目</dd>
                        </dl>
                    </a>
                </li>
                <li>
                    <a href="/show/lvshen">
                        <img src="/picture/flldqg/190326_140_90.jpg" alt="">
                        <dl>
                            <dt>绿申房屋</dt>
                            <dd><p></p></dd>
                            <dd>投资热度：<span>14105↑</span></dd>
                            <dd><strong>74%</strong>的人浏览过该项目</dd>
                        </dl>
                    </a>
                </li>
                <li>
                    <a href="/show/dizhuan2">
                        <img src="/picture/flldqg/999908_140_90.jpg" alt="">
                        <dl>
                            <dt>综合地砖2</dt>
                            <dd><p>自有工厂生产、质优价廉，销售四季均旺销</p></dd>
                            <dd>投资热度：<span>12983↑</span></dd>
                            <dd><strong>78%</strong>的人浏览过该项目</dd>
                        </dl>
                    </a>
                </li>
                <li>
                    <a href="/show/zuanshihua">
                        <img src="/picture/flldqg/189852_140_90.jpg" alt="">
                        <dl>
                            <dt>中国梦钻石画</dt>
                            <dd><p>中国梦钻石画</p></dd>
                            <dd>投资热度：<span>8582↑</span></dd>
                            <dd><strong>71%</strong>的人浏览过该项目</dd>
                        </dl>
                    </a>
                </li>
                <div class="clear"></div>
            </ul>
        </div>
    </div>


    <div class="xs">
        <h3></h3>
        <div class="xsBox">
            <a href="/show/shangpingong"><img src="/picture/flldqg/6027_logo.jpg" alt="尚品宫纸上烧烤"></a><a
                    href="/show/zuonalinanzhuang"><img src="/picture/flldqg/188053_logo.jpg" alt="佐纳利男装"></a>
        </div>
    </div>


</div>

<div id="fixed"></div>

<!--页脚-->
<div id="footer" style="background-color:#FFF;">
    <p>
        <?=$page_script?>
    </p>
    <p>
        技术支持：好商汇传媒（广州）有限公司 创业有风险 投资需谨慎
    </p>
    <style type="text/css">
        #footer p a {
            display: inline-block;
            width: 20px;
            height: 20px;
        }

        #footer p a img {
            width: 20px;
            height: 20px;
        }
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
