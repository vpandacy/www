<?php
return [
    'components' => [
        'cache'        => [//当做缓存
            'class' => 'common\components\redis\RedisCache',
            'redis' => [
                'database' => 0,
                'host'     => 'r-wz9upztf8livi4vcn2.redis.rds.aliyuncs.com',
                'port'     => 6379,
                'password' => 'xqYlAcF9CvqC1U4i'
                'prefix'   => 'hsh_page_',
            ]
        ],
    ],
];
