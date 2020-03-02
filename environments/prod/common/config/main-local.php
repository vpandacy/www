<?php
return [
    'components' => [
        'cache'        => [//当做缓存
            'class' => 'common\components\redis\RedisCache',
            'redis' => [
                'database' => 0,
                'host'     => '127.0.0.1',
                'port'     => 6379,
                'prefix'   => 'hsh_page_',
            ]
        ],
    ],
];
