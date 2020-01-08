<?php
return [
    "domains" => [
        "static" => [
            "cdn" => [
                "switch" => false,
                "domain" => "http://static.test.hsh568.cn",
                "domain_https" => "https://static.test.hsh568.cn"
            ],
            "domain" => "http://static.test.hsh568.cn"
        ],
        "www" => [
            "domain" => "http://www.page.test.hsh568.cn"
        ],
        "api" => [
            "domain" => "http://api.test.hsh568.cn"
        ],
        "cdn_hsh" => [
            "domain" => "http://cdn.hsh568.cn"
        ],
    ],
    'navigation' => '/data/www/private_page/navigation/',
    'Generate' => [
        'path' => '/data/www/private_page/generate',
    ],
    'HeadNavigation' => [
        "head1" => ['10'=>'美容','11'=>'餐饮','13'=>'服务','14'=>'酒水','15'=>'环保','16'=>'建材'],
        'theme1' => []
    ],
    'cookie' => [
        "api"=>[
            "name" => "hsh_api",
            "domain" => ".dev.hsh568.cn"
        ],
        "test"=>'switch_version= dev_20200108_new_page_manager;',
    ],
];
