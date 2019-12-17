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
            "domain" => "http://www.dev.hsh123.cn"
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
];
