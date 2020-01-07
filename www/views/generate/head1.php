<!-- 头部开始 -->
<div id="zsbHeader">
    <div class="zsbmain">
        <div class="logo">
            <a >
                <img id="headlogo" src="" alt="" /></a>
        </div>
        <div class="zsbNav">
            <div class="topNav">
                <ul>
                    <li>
                        <s> </s>
                        <a >手机版</a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="mainNav" id="mainNav">
                <ul>
                    <?php if (isset($head) ): ?>
                        <li>
                            <a href="/">首页</a>
                        </li>
                        <?php foreach ($head as $key=>$_item): ?>
                                <li>
                                    <a href="/category/<?= $key;?>"><?= $_item;?></a>
                                </li>
                        <?php endforeach; ?>
                    <?php endif;?>

                </ul>
            </div>
        </div>
    </div>
</div>



<div id="zsbTxt">
    <div class="zsbmain">
        <div class="zsbmainImg">
            <ul>
                <?php if (isset($data[111]) ): ?>
                    <?php foreach ($data[111] as $key=>$_item): ?>
                        <?php if (($key >=0 && $key < 12)): ?>
                            <li>
                                <a href="/code/<?= $_item['project_code'];?>">
                                    <img src="<?= $_item['project_image'];?>" alt=""></a>
                            </li>
                        <?php endif;?>
                    <?php endforeach; ?>
                <?php endif;?>
            </ul>
        </div>
        <div>
            <ul>
                <?php if (isset($data[112]) ): ?>
                    <?php foreach ($data[112] as $key=>$_item): ?>
                        <?php if (($key >=0 && $key < 28)): ?>
                            <li>
                                <a  href="/code/<?= $_item['project_code'];?>"><?= $_item['project_content'];?></a>
                            </li>
                        <?php endif;?>
                    <?php endforeach; ?>
                <?php endif;?>

            </ul>
        </div>

        <div class="thisBtn">
            <a  target="_blank" class="active">品牌简介</a>
            <a  target="_blank">立即留言</a>
            <a  target="_blank">项目资讯</a>
        </div>
    </div>
</div>
<!-- 头部结束 -->