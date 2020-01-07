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
    ],
    'navigation' => '/data/www/private_page/navigation/',
    'Generate' => [
        'path' => 'F:/PHPTutorial/generate',
        'url' => 'http://www.dev.hsh568.cn/result/index'
    ],
    'HeadNavigation' => [
        "head1" => ['10'=>'美容','11'=>'餐饮','13'=>'服务','14'=>'酒水','15'=>'环保','16'=>'建材'],
        'theme1' => []
    ]
];
