<?php use common\services\GlobalUrlService;

if ($pages): ?>
    <p></p>
    <ul class="pagination" style="text-align:center;margin-top:20px;margin-bottom: 20px;">
        <?php if ($pages['previous']): ?>
            <li style="color:#aaa;margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;">
                <a href="<?= $url ? GlobalUrlService::buildWWWUrl($url, array_merge($search_conditions,
                    ['p' => $pages['current'] - 1])) : GlobalUrlService::buildNullUrl(); ?>">上一页</a></li>
        <?php else: ?>
            <li class="disabled"
                style="color:#aaa;margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;">
                <span>上一页</span></li>
        <?php endif; ?>

        <?php for ($page = $pages['from']; $page <= $pages['end']; $page++): ?>
            <?php if ($page == $pages['current']): ?>
                <li class="active"
                    style="background-color: #46A3FF;color: #fff;margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;">
                    <span><?= $page; ?></span></li>
            <?php else: ?>
                <li style="margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;"><a
                            href="<?= $url ? GlobalUrlService::buildWWWUrl($url, array_merge($search_conditions,
                                ['p' => $page])) : GlobalUrlService::buildNullUrl(); ?>"><?= $page; ?></a></li>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($pages['next']): ?>
            <li style="margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;"><a
                        href="<?= $url ? GlobalUrlService::buildWWWUrl($url, array_merge($search_conditions,
                            ['p' => $pages['current'] + 1])) : GlobalUrlService::buildNullUrl(); ?>">下一页</a></li>
        <?php else: ?>
            <li style="margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;">
                <span>下一页</span></li>
        <?php endif; ?>
    </ul>
    <p></p>
<?php endif; ?>