<?php
return [
    "domains" => [
        "static" => [
            "cdn" => [
                "switch" => false,
                "domain" => "http://static.dev.hsh568.cn",
                "domain_https" => "https://static.dev.hsh568.cn"
            ],
            "domain" => "http://static.dev.hsh568.cn"
        ],
        "www" => [
            "domain" => "http://www.page.dev.hsh568.cn"
        ],
        "api" => [
            "domain" => "http://api.dev.hsh568.cn"
        ],
        "cdn_hsh" => [
            "domain" => "http://cdn.hsh568.cn"
        ],
    ],
    'cookie' => [
        "api"=>[
            "name" => "hsh_api",
            "domain" => ".dev.hsh568.cn"
        ],
        "test"=>'switch_version=server;',
    ],
    'navigation' => '/data/www/private_page/navigation/',
    'Generate' => [
        'path' => 'F:/PHPTutorial/generate',
    ],
    'HeadNavigation' => [
        "head" => ['10'=>'美容','11'=>'餐饮','13'=>'服务','14'=>'酒水','15'=>'环保','16'=>'建材'],
        'theme' => ['10'=>'特色餐饮','11'=>'环保机械','13'=>'家居建材','14'=>'服装鞋帽','15'=>'集成墙','16'=>'生活服务',
            '17'=>'母婴教育','18'=>'休闲食品','19'=>'农村致富']
    ]
];
