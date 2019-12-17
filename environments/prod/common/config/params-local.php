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
            "domain" => "http://www.test.hsh123.cn"
        ],
        "api" => [
            "domain" => "http://api.test.hsh568.cn"
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
];
