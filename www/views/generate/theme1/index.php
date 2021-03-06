<?php
use \common\services\GlobalUrlService;
?>
<!DOCTYPE html>
<!-- >>>>>>注意！！！！ -->
<!-- >>>>>>注意！！！！ -->
<!-- 在需要编辑的地方加上 class="editad" 即可编辑 -->
<!-- 在需要添加的地方加上 onmouseenter="addcss(this);" onmouseleave="recss(this);"  即可添加 -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>好商汇</title>

    <link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl("/css/theme1/index.css");?>"/>
    <!-- layUI 弹框 -->
    <link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl("/css/theme1/layer.css");?>"/>
    <!-- EDIT弹框样式 -->
    <link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl("/css/theme1/edit.css");?>"/>
    <!-- tabs -->
    <link rel="stylesheet" href="<?=GlobalUrlService::buildWWWUrl("/css/theme1/tabs.css");?>"/>

    <!-- jq 弹框 -->
    <script src="<?=GlobalUrlService::buildWWWUrl("/js/theme1/jquery-1.js");?>"></script>
    <script src="<?=GlobalUrlService::buildWWWUrl("/js/theme1/index.js");?>"></script>
    <script src="<?=GlobalUrlService::buildWWWUrl("/js/theme1/utils.js");?>"></script>
    <script src="<?=GlobalUrlService::buildWWWUrl("/js/theme1/pages.js");?>"></script>
    <style>
        h1,h2,h3,h4,h5,h6 {
            font-weight: normal;
        }
    </style>
</head>
    <body>
        <div id="hsh_iframe">
            <div class="top_one_white_max"></div>
            <div class="iframe">
            <div  class="top-tabs">
            <img class="hsh_logo" src="<?=GlobalUrlService::buildWWWUrl('/images/theme1/logo-hsh-563x108.png');?>">
            <ul id="nav">
                <li><a href="/">首页</a></li>
                <?php if ($head):?>
                <?php foreach ($head as $key =>$_item):?>
                        <li><a href="/category/<?=$key?>"><?=$_item?></a></li>
                <?php endforeach;?>
                <?php endif;?>

                <li class="last"><a><img class="img-list-li" src="<?=GlobalUrlService::buildWWWUrl('/images/theme1/nav_2.png');?>"></a></li>
            </ul>
            <img class="tabs-ul" src="<?=GlobalUrlService::buildWWWUrl('/images/theme1/nav.jpg');?>">
             <div class="max_type">
                    <div class="typeBox">
                        <dl>
                            <dt><i></i>快餐加盟</dt>
                            <dd><a href="http://www.page.test.hsh568.cn/category/31" target="_blank">西式快餐</a><a href="http://www.page.test.hsh568.cn/category/33" target="_blank">火锅加盟</a><a href="http://www.page.test.hsh568.cn/category/30" target="_blank">中式快餐</a><a href="http://www.page.test.hsh568.cn/category/37" target="_blank">餐厅加盟</a></dd>
                        </dl>
                        <dl>
                            <dt><i></i>休闲食品</dt>
                            <dd><a href="http://www.page.test.hsh568.cn/category/29" target="_blank">粉面加盟</a><a href="http://www.page.test.hsh568.cn/category/26" target="_blank">甜冰淇淋</a><a href="http://www.page.test.hsh568.cn/category/32" target="_blank">甜品加盟</a><a href="http://www.page.test.hsh568.cn/category/34" target="_blank">麻辣烫</a></dd>
                        </dl>
                        <dl>
                            <dt><i></i>特色餐饮</dt>
                            <dd><a href="http://www.page.test.hsh568.cn/category/29" target="_blank">五谷磨坊</a><a href="http://www.page.test.hsh568.cn/category/36" target="_blank">烤鸡烤鸭</a><a href="http://www.page.test.hsh568.cn/category/32" target="_blank">特色烧烤</a><a href="http://www.page.test.hsh568.cn/category/28" target="_blank">特色小吃</a></dd>
                        </dl>
                        <dl>
                            <dt><i></i>酒水加盟</dt>
                            <dd><a href="http://www.page.test.hsh568.cn/category/35" target="_blank">酒水加盟</a><a href="#" target="_blank">白酒加盟</a><a href="http://www.page.test.hsh568.cn/category/27" target="_blank">奶茶加盟</a><a href="#" target="_blank">饮料加盟</a></dd>
                        </dl>
                        <dl>
                            <dt><i></i>饰品礼品</dt>
                            <dd><a href="#" target="_blank">节日礼品</a><a href="#" target="_blank">工艺礼品</a><a href="#" target="_blank">女生饰品</a><a href="#" target="_blank">银饰品</a></dd>
                        </dl>
                        <dl>
                            <dt><i></i>服装加盟</dt>
                            <dd><a href="http://www.page.test.hsh568.cn/category/40" target="_blank">女装加盟</a><a href="http://www.page.test.hsh568.cn/category/41" target="_blank">男装加盟</a><a href="http://www.page.test.hsh568.cn/category/42" target="_blank">童装加盟</a><a href="http://www.page.test.hsh568.cn/category/43" target="_blank">内衣加盟</a></dd>
                        </dl>
                        <dl>
                            <dt><i></i>建材加盟</dt>
                            <dd><a href="http://www.page.test.hsh568.cn/category/2" target="_blank">家居日用</a><a href="http://www.page.test.hsh568.cn/category/20" target="_blank">灯具灯饰</a><a href="http://www.page.test.hsh568.cn/category/16" target="_blank">液体壁纸</a><a href="http://www.page.test.hsh568.cn/category/19" target="_blank">装饰装修</a></dd>
                        </dl>
                        <dl>
                            <dt><i></i>环保机械</dt>
                            <dd><a href="http://www.page.test.hsh568.cn/category/77" target="_blank">酿酒机械</a><a href="http://www.page.test.hsh568.cn/category/75" target="_blank">塑料颗粒机</a><a href="http://www.page.test.hsh568.cn/category/47" target="_blank">制砂机</a><a href="http://www.page.test.hsh568.cn/category/76" target="_blank">袜子机</a></dd>
                        </dl>
                        <dl>
                            <dt><i></i>教育加盟</dt>
                            <dd><a href="http://www.page.test.hsh568.cn/category/53" target="_blank">教育培训</a><a href="http://www.page.test.hsh568.cn/category/69" target="_blank">亲子馆</a><a href="http://www.page.test.hsh568.cn/category/66" target="_blank">益智玩具</a><a href="http://www.page.test.hsh568.cn/category/64" target="_blank">儿童乐园</a></dd>
                        </dl>
                        <dl>
                            <dt><i></i>保健加盟</dt>
                            <dd><a href="http://www.page.test.hsh568.cn/category/50" target="_blank">成人保健</a><a href="http://www.page.test.hsh568.cn/category/47" target="_blank">视力保健</a><a href="http://www.page.test.hsh568.cn/category/46" target="_blank">养生馆</a><a href="http://www.page.test.hsh568.cn/category/70" target="_blank">母婴用品</a></dd>
                        </dl>
                        <dl>
                            <dt><i></i>美容美体</dt>
                            <dd><a href="http://www.page.test.hsh568.cn/category/18" target="_blank">美缝剂</a><a href="#" target="_blank">瘦身减肥</a><a href="http://www.page.test.hsh568.cn/category/49" target="_blank">美容美甲</a><a href="http://www.page.test.hsh568.cn/category/48" target="_blank">化妆品</a></dd>
                        </dl>
                        <dl>
                            <dt><i></i>农村致富</dt>
                            <dd><a href="http://www.page.test.hsh568.cn/category/52" target="_blank">农村种植</a><a href="http://www.page.test.hsh568.cn/category/51" target="_blank">农村养殖</a><a href="http://www.page.test.hsh568.cn/category/71" target="_blank">APP代理</a><a href="http://www.page.test.hsh568.cn/category/42" target="_blank">POS机</a></dd>
                        </dl>
                    </div>
                </div>
            </div>
             <div  class="recommend">
                 <dl>
                     <dt></dt>
                     <dd>
                         <?php if (isset($data[1]) ): ?>
                             <?php foreach ($data[1] as $key=>$_item): ?>
                                 <?php if (($key >=0 && $key < 6)): ?>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 <?php endif;?>
                             <?php endforeach; ?>
                         <?php endif;?>
                     </dd>
                 </dl>
                 <dl>
                     <dt></dt>
                     <dd>
                         <?php if (isset($data[1]) ): ?>
                             <?php foreach ($data[1] as $key=>$_item): ?>
                                 <?php if (($key >=6 && $key < 12)): ?>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 <?php endif;?>
                             <?php endforeach; ?>
                         <?php endif;?>
                     </dd>
                 </dl>
                 <dl>
                     <dt></dt>
                     <dd>
                         <?php if (isset($data[1]) ): ?>
                             <?php foreach ($data[1] as $key=>$_item): ?>
                                 <?php if (($key >=12 && $key < 18)): ?>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 <?php endif;?>
                             <?php endforeach; ?>
                         <?php endif;?>
                     </dd>
                 </dl>
                 <dl>
                     <dt></dt>
                     <dd>
                         <?php if (isset($data[1]) ): ?>
                             <?php foreach ($data[1] as $key=>$_item): ?>
                                 <?php if (($key >=18 && $key < 24)): ?>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 <?php endif;?>
                             <?php endforeach; ?>
                         <?php endif;?>
                     </dd>
                 </dl>
             </div>
             <div class="img-list">
                    <ul>
                        <?php if (isset($data[2]) ): ?>
                            <?php foreach ($data[2] as $key=>$_item): ?>
                                <?php if (($key >=0 && $key < 8)): ?>
                                    <li>
                                        <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><img src="<?=$_item['project_image'];?>"></a>
                                    </li>
                                <?php endif;?>
                            <?php endforeach; ?>
                        <?php endif;?>

                    </ul>
                </div>
             <div class="item-list">
                 <ul>
                     <?php if (isset($data[3]) ): ?>
                         <?php foreach ($data[3] as $key=>$_item): ?>
                             <?php if (($key >=0 && $key < 3)): ?>
                                 <li>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 </li>
                             <?php endif;?>
                         <?php endforeach; ?>
                     <?php endif;?>
                 </ul>
                 <ul>
                     <?php if (isset($data[3]) ): ?>
                         <?php foreach ($data[3] as $key=>$_item): ?>
                             <?php if (($key >=3 && $key < 6)): ?>
                                 <li>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 </li>
                             <?php endif;?>
                         <?php endforeach; ?>
                     <?php endif;?>
                 </ul>
                 <ul>
                     <?php if (isset($data[3]) ): ?>
                         <?php foreach ($data[3] as $key=>$_item): ?>
                             <?php if (($key >=6 && $key < 9)): ?>
                                 <li>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 </li>
                             <?php endif;?>
                         <?php endforeach; ?>
                     <?php endif;?>
                 </ul>
                 <ul>
                     <?php if (isset($data[3]) ): ?>
                         <?php foreach ($data[3] as $key=>$_item): ?>
                             <?php if (($key >=9 && $key < 12)): ?>
                                 <li>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 </li>
                             <?php endif;?>
                         <?php endforeach; ?>
                     <?php endif;?>
                 </ul>
                 <ul>
                     <?php if (isset($data[3]) ): ?>
                         <?php foreach ($data[3] as $key=>$_item): ?>
                             <?php if (($key >=12 && $key < 15)): ?>
                                 <li>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 </li>
                             <?php endif;?>
                         <?php endforeach; ?>
                     <?php endif;?>
                 </ul>
                 <ul>
                     <?php if (isset($data[3]) ): ?>
                         <?php foreach ($data[3] as $key=>$_item): ?>
                             <?php if (($key >=15 && $key < 18)): ?>
                                 <li>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 </li>
                             <?php endif;?>
                         <?php endforeach; ?>
                     <?php endif;?>
                 </ul>
                 <ul>
                     <?php if (isset($data[3]) ): ?>
                         <?php foreach ($data[3] as $key=>$_item): ?>
                             <?php if (($key >=18 && $key < 21)): ?>
                                 <li>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 </li>
                             <?php endif;?>
                         <?php endforeach; ?>
                     <?php endif;?>
                 </ul>
                 <ul>
                     <?php if (isset($data[3]) ): ?>
                         <?php foreach ($data[3] as $key=>$_item): ?>
                             <?php if (($key >=21 && $key < 24)): ?>
                                 <li>
                                     <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content']; ?></a>
                                 </li>
                             <?php endif;?>
                         <?php endforeach; ?>
                     <?php endif;?>
                 </ul>
             </div>
             <div style="overflow: hidden" class="box-img">
                    <!--  轮播图 -->
                    <div id="box" class="box">
                        <div class="box-1">
                            <ul>
                                <?php if (isset($data[4])): ?>
                                    <?php foreach ($data[4] as $key => $_item): ?>
                                        <?php if (($key >= 0 && $key < 5)): ?>
                                            <li>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><img src="<?=$_item['project_image'];?>"
                                                     alt="<?=$_item['project_content']?>">
                                                    <h2><?=$_item['project_content']?></h2></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="box-2">
                            <ul>

                            </ul>
                        </div>
                        <div class="box-3">
                            <span class="prev"> < </span>
                            <span class="next"> > </span>
                        </div>
                    </div>
                    <!-- 轮播图右边的类目 -->
                    <div class="box-right">
                        <ul>

                            <?php if (isset($data[5]) ): ?>
                                <?php foreach ($data[5] as $key=>$_item): ?>
                                    <?php if (($key >=0 && $key < 12)): ?>
                                        <li>
                                            <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                <img src="<?= $_item['project_image']; ?>">
                                                <p><?= $_item['project_content']; ?></p>
                                            </a>
                                        </li>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            <?php endif;?>

                        </ul>
                    </div>
                </div>
             <div class="three-list" style="overflow: hidden ">
                 <div class="left">
                     <h3><span>热门</span>项目推荐</h3>
                     <div class="min_type">
                         <ul class="min_left_ul">

                             <?php if (isset($data[6]) ): ?>
                                 <?php foreach ($data[6] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?= $_item['project_content']; ?></a></li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>

                         </ul>
                     </div>
                     <div class="typeBox">
                         <ul style="display: block;" onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[80]) ): ?>
                                 <?php foreach ($data[80] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                         <ul onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[81]) ): ?>
                                 <?php foreach ($data[81] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                         <ul onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[82]) ): ?>
                                 <?php foreach ($data[82] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                         <ul onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[83]) ): ?>
                                 <?php foreach ($data[83] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                         <ul onmouseenter="addcss(this,1);">
                             <?php if (isset($data[84]) ): ?>
                                 <?php foreach ($data[84] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                         <ul onmouseenter="addcss(this,1);">
                             <?php if (isset($data[85]) ): ?>
                                 <?php foreach ($data[85] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?></ul>
                         <ul onmouseenter="addcss(this,1);">
                             <?php if (isset($data[86]) ): ?>
                                 <?php foreach ($data[86] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                         <ul onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[87]) ): ?>
                                 <?php foreach ($data[87] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                         <ul onmouseenter="addcss(this,1);">
                             <?php if (isset($data[88]) ): ?>
                                 <?php foreach ($data[88] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                         <ul onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[89]) ): ?>
                                 <?php foreach ($data[89] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                         <ul onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[90]) ): ?>
                                 <?php foreach ($data[90] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                         <ul onmouseenter="addcss(this,1);">
                             <?php if (isset($data[91]) ): ?>
                                 <?php foreach ($data[91] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 12)): ?>
                                         <li>
                                             <span><?=$key+1;?></span><a target="_blank" href="/code/<?= $_item['project_code']; ?>" ><?=$_item['project_content'];?></a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                     </div>
                     <div class="clear"></div>
                 </div>
                 <div class="right">
                     <h3>
                         <ol>
                             <li class="active">热门</li>
                             <li>最新</li>
                             <li>口碑</li>
                             <li>品牌</li>
                             <li>精选</li>
                         </ol>
                     </h3>
                     <div class="rightBox">
                         <ul style="display:block;" onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[18]) ): ?>
                                 <?php foreach ($data[18] as $key=>$_item): ?>
                                     <?php if (($key >=0 && $key < 24)): ?>
                                         <li >
                                             <a target="_blank" href="/code/<?= $_item['project_code']; ?>" >
                                                 <img src="<?=$_item['project_image'];?>">
                                             </a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>

                         <ul style="display:block;" onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[18]) ): ?>
                                 <?php foreach ($data[18] as $key=>$_item): ?>
                                     <?php if (($key >=24 && $key < 48)): ?>
                                         <li >
                                             <a target="_blank" href="/code/<?= $_item['project_code']; ?>" >
                                                 <img src="<?=$_item['project_image'];?>">
                                             </a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>

                         <ul style="display:block;" onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[18]) ): ?>
                                 <?php foreach ($data[18] as $key=>$_item): ?>
                                     <?php if (($key >=48 && $key < 72)): ?>
                                         <li >
                                             <a target="_blank" href="/code/<?= $_item['project_code']; ?>" >
                                                 <img src="<?=$_item['project_image'];?>">
                                             </a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>

                         <ul style="display:block;" onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[18]) ): ?>
                                 <?php foreach ($data[18] as $key=>$_item): ?>
                                     <?php if (($key >=72 && $key < 96)): ?>
                                         <li >
                                             <a target="_blank" href="/code/<?= $_item['project_code']; ?>" >
                                                 <img src="<?=$_item['project_image'];?>">
                                             </a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>

                         <ul style="display:block;" onmouseenter="addcss(this,1);" >
                             <?php if (isset($data[18]) ): ?>
                                 <?php foreach ($data[18] as $key=>$_item): ?>
                                     <?php if (($key >=96 && $key < 120)): ?>
                                         <li >
                                             <a target="_blank" href="/code/<?= $_item['project_code']; ?>" >
                                                 <img src="<?=$_item['project_image'];?>">
                                             </a>
                                         </li>
                                     <?php endif;?>
                                 <?php endforeach; ?>
                             <?php endif;?>
                         </ul>
                         <div class="clear"></div>
                     </div>
                 </div>
             </div>
             <!-- [投资推荐-140*80] -->
             <div id="recom" class="bottom">
                    <div class="main">
                        <div class="recomBox">

                            <?php if (isset($data[19]) ): ?>
                                <?php foreach ($data[19] as $key=>$_item): ?>
                                    <?php if (($key >=0 && $key < 8)): ?>
                                        <dl>
                                            <dt><a target="_blank" href="/code/<?= $_item['project_code']; ?>"><img src="<?=$_item['project_image']?>"
                                                        trueimg="<?=$_item['project_image']?>" alt=""></a></dt>
                                            <dd>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?=$_item['project_content']?></a>
                                                <span><?=$_item['project_content']?></span>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>" class="zixun">咨询</a>
                                            </dd>
                                        </dl>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            <?php endif;?>

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
             <div class="sidebar">
                    <div class="left">
                        <div class="left1">
                            <dl>
                                <dt class="dt1">投资</dt>
                                <?php if (isset($data[20]) ): ?>
                                    <?php foreach ($data[20] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 8)): ?>
                                            <dd >
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                    <?= $_item['project_content']; ?>
                                                </a>
                                            </dd>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </dl>

                            <dl>
                                <dt class="dt2">招商</dt>
                                <?php if (isset($data[21]) ): ?>
                                    <?php foreach ($data[21] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 8)): ?>
                                            <dd >
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                    <?= $_item['project_content']; ?>
                                                </a>
                                            </dd>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>

                            </dl>
                            <dl>
                                <dt class="dt3">创业</dt>
                                <?php if (isset($data[22]) ): ?>
                                    <?php foreach ($data[22] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 8)): ?>
                                            <dd >
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                    <?= $_item['project_content']; ?>
                                                </a>
                                            </dd>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </dl>
                            <dl>
                                <dt class="dt4">商机</dt>

                                <?php if (isset($data[23]) ): ?>
                                    <?php foreach ($data[23] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 8)): ?>
                                            <dd >
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                    <?= $_item['project_content']; ?>
                                                </a>
                                            </dd>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </dl>
                            <dl>
                                <dt class="dt5">加盟</dt>

                                <?php if (isset($data[24]) ): ?>
                                    <?php foreach ($data[24] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 8)): ?>
                                            <dd >
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                    <?= $_item['project_content']; ?>
                                                </a>
                                            </dd>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </dl>
                        </div>
                    </div>
                    <div class="right">
                        <div class="rightBox">
                            <ul>


                                <?php if (isset($data[25]) ): ?>
                                    <?php foreach ($data[25] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 11)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                    <?= $_item['project_content']; ?>
                                                </a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>

                            </ul>
                            <ul >
                                <?php if (isset($data[26]) ): ?>
                                    <?php foreach ($data[26] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 11)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                    <?= $_item['project_content']; ?>
                                                </a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </ul>
                            <ul>
                                <?php if (isset($data[27]) ): ?>
                                    <?php foreach ($data[27] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 11)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                    <?= $_item['project_content']; ?>
                                                </a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?></ul>
                            <ul>
                                <?php if (isset($data[28]) ): ?>
                                    <?php foreach ($data[28] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 11)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                    <?= $_item['project_content']; ?>
                                                </a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?></ul>
                            <ul>
                                <?php if (isset($data[29]) ): ?>
                                    <?php foreach ($data[29] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 11)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                    <?= $_item['project_content']; ?>
                                                </a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?> </ul>
                            <ul>
                                <?php if (isset($data[30]) ): ?>
                                    <?php foreach ($data[30] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 11)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                    <?= $_item['project_content']; ?>
                                                </a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?> </ul>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
             <!-- [投资推荐-140*80] -->
             <div id="recom" class="bottom">
                <div class="main">
                    <div class="recomBox" onmouseenter="addcss(this);" onmouseleave="recss(this);" data="'posid':34,'theme_id':1,'type':1">


                        <?php if (isset($data[31]) ): ?>
                            <?php foreach ($data[31] as $key=>$_item): ?>
                                <?php if (($key >=0 && $key < 8)): ?>
                                    <dl>
                                        <dt><a target="_blank" href="/code/<?= $_item['project_code']; ?>"><img
                                                        src="<?= $_item['project_image'];?>" alt=""></a></dt>
                                        <dd>
                                            <a target="_blank" href="/code/<?= $_item['project_code']; ?>" target="_blank"><?= $_item['project_content'];?></a>
                                            <span><?= $_item['project_content'];?></span>
                                            <a target="_blank" href="/code/<?= $_item['project_code']; ?>" target="_blank" class="zixun">咨询</a>
                                        </dd>
                                    </dl>
                                <?php endif;?>
                            <?php endforeach; ?>
                        <?php endif;?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
             <div class="sidebar">
                    <div class="left">
                        <div class="left2">
                            <ul>
                                <ul >
                                    <?php if (isset($data[32]) ): ?>
                                        <?php foreach ($data[32] as $key=>$_item): ?>
                                            <?php if (($key >=0 && $key < 18)): ?>
                                                <li>
                                                    <a target="_blank" href="/code/<?= $_item['project_code']; ?>"  ><?=$_item['project_content']?></a>
                                                    <i class="top"></i>
                                                </li>
                                            <?php endif;?>
                                        <?php endforeach; ?>
                                    <?php endif;?>

                                     <div class="clear"></div>
                                </ul>
                            </ul></div>
                    </div>
                    <div class="right">
                        <div class="rightBox">
                            <ul>
                                <?php if (isset($data[33]) ): ?>
                                    <?php foreach ($data[33] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 9)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>"  ><?=$_item['project_content']?></a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?></ul>
                            <ul>
                                <?php if (isset($data[34]) ): ?>
                                    <?php foreach ($data[34] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 9)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>"  ><?=$_item['project_content']?></a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </ul>
                            <ul >
                                <?php if (isset($data[35]) ): ?>
                                    <?php foreach ($data[35] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 9)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>"  ><?=$_item['project_content']?></a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </ul>
                            <ul>
                                <?php if (isset($data[36]) ): ?>
                                    <?php foreach ($data[36] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 9)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>"  ><?=$_item['project_content']?></a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </ul>
                            <ul>
                                <?php if (isset($data[37]) ): ?>
                                    <?php foreach ($data[37] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 9)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>"  ><?=$_item['project_content']?></a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </ul>
                            <ul >
                                <?php if (isset($data[38]) ): ?>
                                    <?php foreach ($data[38] as $key=>$_item): ?>
                                        <?php if (($key >=0 && $key < 9)): ?>
                                            <li <?php if (!(($key +1) %3)):?> class="li" <?php endif;?>>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>"  ><?=$_item['project_content']?></a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </ul>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
             <!-- [投资推荐-140*80] -->
             <div id="recom" class="bottom">
                    <div class="main">
                        <div class="recomBox" >
                            <?php if (isset($data[39]) ): ?>
                                <?php foreach ($data[39] as $key=>$_item): ?>
                                    <?php if (($key >=0 && $key < 8)): ?>
                                        <dl >
                                            <dt><a target="_blank" href="/code/<?= $_item['project_code']; ?>"><img
                                                            src="<?= $_item['project_image'];?>" alt=""></a></dt>
                                            <dd>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?= $_item['project_content'];?></a>
                                                <span><?= $_item['project_content'];?></span>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>" class="zixun">咨询</a>
                                            </dd>
                                        </dl>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            <?php endif;?>

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!-- [1F] -->
             <div id="f6" class="f_one floor bottom">
                    <div class="main">
                        <div class="top">
                            <p>
                                <?php if (isset($data[40]) ): ?>
                                    <?php foreach ($data[40] as $key=>$_item): ?>
                                        <?php if (($key ==0)): ?>
                                            <a target="_blank" href="/code/<?= $_item['project_code']; ?>"  >
                                                <?=$_item['project_content']?>
                                            </a>
                                        <?php elseif ($key >=1 && $key <6):?>
                                            |<a target="_blank" href="/code/<?= $_item['project_code']; ?>" >
                                                <?=$_item['project_content']?>
                                            </a>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?> </p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="left">
                            <div class="l_top" >
                                <?php if (isset($data[41]) ): ?>
                                    <?php foreach ($data[41] as $key=>$_item): ?>
                                        <?php if (($key ==0)):?>
                                            <div class="topMain">
                                                <i class="light"></i>
                                                <h4><?=$_item['project_content']?></h4>
                                                <p><?=$_item['project_content']?></p>
                                                <dl>
                                                    <dt>
                                                        <img src="<?=$_item['project_image'];?>"></dt>
                                                    <dd class="one"><?=$_item['project_content']?></dd>
                                                    <dd class="two"><span>关注度：<i></i></span><span>咨询：<i></i></span></dd>
                                                </dl>
                                                <div class="btns">
                                                    <a target="_blank" href="/code/<?= $_item['project_code']; ?>">查看详情</a>
                                                    <a target="_blank" href="/code/<?= $_item['project_code']; ?>" class="active">立即咨询</a>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </div>
                            <div class="l_com">
                                <?php if (isset($data[42]) ): ?>
                                    <?php foreach ($data[42] as $key=>$_item): ?>
                                        <?php if (($key == 0)): ?>
                                            <dl>
                                                <dt><img src="<?= $_item['project_image']?>"></dt>
                                                <dd><?=$_item['project_content']?></dd>
                                            </dl>
                                            <div class="btns">
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">查看详情</a>
                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">立即咨询</a>
                                            </div>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                                <ul>
                                    <?php if (isset($data[43]) ): ?>
                                        <?php foreach ($data[43] as $key=>$_item): ?>
                                            <?php if (($key >= 0 && $key < 4)): ?>
                                                <li>
                                                    <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><img src="<?= $_item['project_image'];?>"></a>
                                                </li>
                                            <?php endif;?>
                                        <?php endforeach; ?>
                                    <?php endif;?>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="topImg">
                                <ul>
                                    <?php if (isset($data[44]) ): ?>
                                        <?php foreach ($data[44] as $key=>$_item): ?>
                                            <?php if (($key >= 0 && $key < 8)): ?>
                                                <li>
                                                    <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><img
                                                                src="<?= $_item['project_image'];?>"></a>
                                                </li>
                                            <?php endif;?>
                                        <?php endforeach; ?>
                                    <?php endif;?>
                                </ul>
                            </div>
                            <div class="mainImg">
                                <div class="box">




                                    <?php if (isset($data[99]) ): ?>
                                        <?php foreach ($data[99] as $key=>$_item): ?>
                                            <?php if (($key >= 0 && $key < 24)): ?>
                                                <dl>
                                                    <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                        <dt>
                                                            <img src="<?= $_item['project_image'] ?>"
                                                                 trueimg="<?= $_item['project_image'] ?>" alt="">
                                                        </dt>
                                                        <dd><?=$_item['project_content'];?></dd>
                                                    </a>
                                                </dl>

                                            <?php endif;?>
                                        <?php endforeach; ?>
                                    <?php endif;?>



                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <!-- 1F结束 -->
                <!-- [浮动项目-文字效果] -->
                <div id="radom" class="bottom">
                    <div class="main">
                        <div class="main">
                            <div>
                                <?php if (isset($data[100])): ?>
                                    <?php foreach ($data[100] as $key => $_item): ?>
                                        <?php if (($key >= 0 && $key < 13)): ?>
                                            <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                <?= $_item['project_content']; ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="textBox" style="display: none;">
                                <?php if (isset($data[100])): ?>
                                    <?php foreach ($data[100] as $key => $_item): ?>
                                        <?php if (($key >= 13 && $key < 26)): ?>
                                            <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                <?= $_item['project_content']; ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="textBox"  style="display: none;">
                                <?php if (isset($data[100])): ?>
                                    <?php foreach ($data[100] as $key => $_item): ?>
                                        <?php if (($key >= 26 && $key < 39)): ?>
                                            <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                <?= $_item['project_content']; ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- [品牌商机推荐] -->
                <div id="opport" class="bottom">
                    <div class="main">
                        <h3>品牌商机推荐</h3>
                        <ul>

                            <?php if (isset($data[45]) ): ?>
                                <?php foreach ($data[45] as $key=>$_item): ?>
                                    <?php if (($key >=0 && $key < 36)): ?>
                                        <li>
                                            <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><img src="<?=$_item['project_image']?>"></a>
                                        </li>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            <?php endif;?>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- [底部文字版——3版] -->
                <div id="text" class="bottom">
                    <div class="main">
                        <div class="one conmen">
                            <div class="main">
                                <div class="top">
                                    <h3>爱生活</h3>
                                    <p>
                                        <?php if (isset($data[46]) ): ?>
                                            <?php foreach ($data[46] as $key=>$_item): ?>
                                                <?php if (($key == 0 )): ?>
                                                    <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                        <?=$_item['project_content']?></a>
                                                <?php endif;?>
                                            <?php endforeach; ?>
                                        <?php endif;?>
                                    </p>

                                </div>
                                <div class="con">
                                    <ul >
                                        <?php if (isset($data[47]) ): ?>
                                            <?php foreach ($data[47] as $key=>$_item): ?>
                                                <?php if (($key >=0 && $key < 24)): ?>
                                                    <li>
                                                        <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?=$_item['project_content']?></a>
                                                    </li>
                                                <?php endif;?>
                                            <?php endforeach; ?>
                                        <?php endif;?>
                                    </ul>
                                </div>
                                <div class="BtnImg">
                                    <ul>
                                        <li>
                                            <?php if (isset($data[48]) ): ?>
                                                <?php foreach ($data[48] as $key=>$_item): ?>
                                                    <?php if (($key >=0 && $key < 4)): ?>
                                                        <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                            <img src="<?= $_item['project_image'] ?>"></a>
                                                    <?php endif;?>
                                                <?php endforeach; ?>
                                            <?php endif;?>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="two conmen">
                            <div class="main">
                                <div class="top">
                                    <h3>爱家装</h3>
                                    <p>
                                        <?php if (isset($data[49]) ): ?>
                                            <?php foreach ($data[49] as $key=>$_item): ?>
                                                <?php if (($key == 0 )): ?>
                                                    <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                        <?=$_item['project_content']?></a>
                                                <?php endif;?>
                                            <?php endforeach; ?>
                                        <?php endif;?>
                                    </p>
                                </div>
                                <div class="con">
                                    <ul>
                                        <?php if (isset($data[50]) ): ?>
                                            <?php foreach ($data[50] as $key=>$_item): ?>
                                                <?php if (($key >=0 && $key < 24)): ?>
                                                    <li>
                                                        <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?=$_item['project_content']?></a>
                                                    </li>
                                                <?php endif;?>
                                            <?php endforeach; ?>
                                        <?php endif;?>
                                    </ul>
                                </div>
                                <div class="BtnImg">
                                    <ul>
                                        <li>
                                            <?php if (isset($data[51]) ): ?>
                                                <?php foreach ($data[51] as $key=>$_item): ?>
                                                    <?php if (($key >=0 && $key < 4)): ?>
                                                        <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                            <img src="<?= $_item['project_image'] ?>"></a>
                                                    <?php endif;?>
                                                <?php endforeach; ?>
                                            <?php endif;?>
                                            </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="three conmen">
                            <div class="main">
                                <div class="top" >
                                    <h3>新奇特</h3>
                                    <p>
                                        <?php if (isset($data[52]) ): ?>
                                            <?php foreach ($data[52] as $key=>$_item): ?>
                                                <?php if (($key == 0 )): ?>
                                                    <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                        <?=$_item['project_content']?>
                                                    </a>
                                                <?php endif;?>
                                            <?php endforeach; ?>
                                        <?php endif;?>                                    </p>
                                </div>
                                <div class="con">
                                    <ul>
                                        <?php if (isset($data[53]) ): ?>
                                            <?php foreach ($data[53] as $key=>$_item): ?>
                                                <?php if (($key >=0 && $key < 24)): ?>
                                                    <li target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                        <a target="_blank" href="/code/<?= $_item['project_code']; ?>"><?=$_item['project_content']?></a>
                                                    </li>
                                                <?php endif;?>
                                            <?php endforeach; ?>
                                        <?php endif;?>
                                    </ul>
                                </div>
                                <div class="BtnImg">
                                    <ul>
                                        <li>
                                            <?php if (isset($data[54]) ): ?>
                                                <?php foreach ($data[54] as $key=>$_item): ?>
                                                    <?php if (($key >=0 && $key < 4)): ?>
                                                        <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                            <img src="<?= $_item['project_image'] ?>">
                                                        </a>
                                                    <?php endif;?>
                                                <?php endforeach; ?>
                                            <?php endif;?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>


                <!-- [资讯] -->
                <div id="more" class="bottom">
                    <div class="main">
                        <div class="left">
                            <div class="leftBox">
                                <h3>优质项目</h3>
                                <ul>
                                    <?php if (isset($data[55]) ): ?>
                                        <?php foreach ($data[55] as $key=>$_item): ?>
                                            <?php if (($key >=0 && $key < 5)): ?>
                                                <li><a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                        <?= $_item['project_content'] ?></a>
                                                </li>
                                            <?php endif;?>
                                        <?php endforeach; ?>
                                    <?php endif;?>
                                </ul>
                                <!--<a href="/news/10-127.stml" target="_blank" class="more">更多></a>-->
                            </div>
                        </div>
                        <div class="com">
                            <div class="comBox">
                                <h3>投资行情</h3>
                                <div class="comAuto" >
                                    <div class="comMain"  style="left: 0px;">
                                        <ul>
                                            <?php if (isset($data[56]) ): ?>
                                                <?php foreach ($data[56] as $key=>$_item): ?>
                                                    <?php if (($key >=0 && $key < 2)): ?>
                                                        <dl style="position: static; left: 2360px;">
                                                            <dt>
                                                                <a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                                    <img src="<?= $_item['project_image'] ?>" ></a>
                                                            </dt>
                                                            <dd>
                                                                <h4><a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                                        <?= $_item['project_content'] ?></a>
                                                                </h4>
                                                                <p><a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                                        <?= $_item['project_content'] ?></a>
                                                                </p>
                                                            </dd>
                                                        </dl>
                                                    <?php endif;?>
                                                <?php endforeach; ?>
                                            <?php endif;?>
                                        </ul></div>
                                    <ul >
                                    </ul></div>
                                <div class="btnAuto">
                                    <span class="active"></span>
                                    <span class=""></span>
                                </div>
                                <!--<a href="/news/10-128.stml" target="_blank" class="more">更多></a>-->
                            </div>
                        </div>
                        <div class="right">
                            <div class="rightBox">
                                <h3>优质项目</h3>
                                <ul>
                                    <?php if (isset($data[58]) ): ?>
                                        <?php foreach ($data[58] as $key=>$_item): ?>
                                            <?php if (($key >=0 && $key < 5)): ?>
                                                <li><a target="_blank" href="/code/<?= $_item['project_code']; ?>">
                                                        <?= $_item['project_content'] ?></a>
                                                </li>
                                            <?php endif;?>
                                        <?php endforeach; ?>
                                    <?php endif;?>
                                </ul>
                                <!--<a href="/news/10-129.stml" target="_blank" class="more">更多></a>-->
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <!-- [导航条] -->
            <div id="footer">
                <div class="top">
                    <div class="topNav"><img src="http://www.hsh.cn/static/theme/editTheme6/picture/bottom.jpg" trueimg="picture/bottom.jpg" alt=""></div>
                </div>
                <div class="main">
                    <div class="mainBox">
                        <div class="b_logo"><a href="#"><img trueimg="http://cdn.hsh568.cn/zsbcc/images/logo-hsh-563x108.png" src="http://cdn.hsh568.cn/zsbcc/images/logo-hsh-563x108.png" alt=""></a></div>
                        <div class="info">
                            <p class="first"><a href="http://www.hsh.cn/aboutme">关于我们</a>|
                                <a href="http://www.hsh.cn/friendly">广告服务</a>|
                                <a href="http://www.hsh.cn/legal">法律声明</a>|
                                <a href="http://www.hsh.cn/contactus">联系我们</a>|
                                <a href="http://www.hsh.cn/tssc">投诉删除</a>
                            </p>
                            <p>客服电话：telephone_replace
                                创业有风险 投资需谨慎</p>
                            <p>技术支持：company_replace  ICP备案号：<a href="http://www.beian.miit.gov.cn/" target="_blank">record_number_replace</a></p>
                        </div>
                    </div>
                </div>
                <div class="itrust">
                    <a href="http://www.beian.miit.gov.cn/" target="_blank"><img src="http://www.hsh.cn/static/theme/editTheme6/picture/1.jpg" alt="网站备案"></a>
<!--                    <a href="http://www.hsh.cn/Public/zsbcc06/info1.html" target="_blank"><img src="http://www.hsh.cn/static/theme/editTheme6/picture/1.jpg" alt="中国互联网协会"></a>-->
<!--                    <a href="http://www.hsh.cn/Public/zsbcc06/info2.html" target="_blank"><img src="http://www.hsh.cn/static/theme/editTheme6/picture/1.jpg" alt="广东连锁经营协会"></a>-->
                </div>
            </div>
            <style>
                .itrust{width:1000px; margin:0 auto 8px; text-align: center;}
                .itrust img{display: inline-block !important; margin:0 5px; }
            </style>
        </div>

    </body>
</html>