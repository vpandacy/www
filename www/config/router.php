<?php
return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => false,
    'rules' => [
        '<controller:(code)>/<code:[a-zA-Z0-9\-_]+>' => '<controller>/index',
        '<controller:(lybook)>/<code:[a-zA-Z0-9\-_]+>' => '<controller>/index',
        '<controller:(brand)>/<code:[a-zA-Z0-9\-_]+>' => '<controller>/index',
        '<controller:(category)>/<id:\d+>' => '<controller>/index',
        '<controller:(category)>/<id:\d+>/sort/<sort:\w+>' => '<controller>/index',
        '<controller:(search)>' => '<controller>/index',
        '<action:\w+>'=>'company/<action>',
        '/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
        '<controller:(page)>/<media_id:\d+>/info/<project_id:\d+>' => '<controller>/index',
        '/' => 'default/index',

    ],
];
