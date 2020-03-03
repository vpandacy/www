<?php
return [
    "domains" => [
        "static" => [
            "cdn" => [
                "switch" => true,
                "domain" => "//cdn1.static.corp.hsh568.cn",
                "domain_https" => "//cdn1.static.corp.hsh568.cn"
            ],
            "domain" => "http://cdn1.static.corp.hsh568.cn"
        ],
        "www" => [
            "domain" => "http://www.page.hsh568.cn"
        ],
        "api" => [
            "domain" => "http://api.corp.hsh568.cn"
        ],
        "cdn_hsh" => [
            "domain" => "http://cdn.hsh568.cn"
        ],
    ],
    'navigation' => '/data/www/private_page/navigation/',
    'Generate' => [
        'path' => '/data/www/private_page/generate',
        'url' => 'http://api.corp.hsh568.cn/lianzhan/'
    ],
    'HeadNavigation' => [
        "head" => ['49' => '美容', '11' => '餐饮', '61' => '服务', '35' => '酒水', '9' => '环保', '1' => '建材'],
        'theme' => [
            '3' => '特色餐饮',
            '9' => '环保机械',
            '2' => '家居建材',
            '4' => '服装鞋帽',
            '10' => '集成墙',
            '6' => '生活服务',
            '8' => '母婴教育',
            '5' => '休闲食品',
            '7' => '农村致富'
        ]
    ],
    'auth' => [
        'auth_app_id' => 'webpage',
        'auth_key' => 'KDkjkdsjkdkjjgkDK45dkbnzro56',
    ],
];
