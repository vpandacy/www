<?php
return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => false,
    'rules' => [
        '<controller:(code)>/<code:[a-zA-Z0-9\-_]+>' => '<controller>/index',
        '<controller:(lybook)>/<code:[a-zA-Z0-9\-_]+>' => '<controller>/index',
        '<action:\w+>'=>'company/<action>',
        '/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
        '<controller:(page)>/<media_id:\d+>/info/<project_id:\d+>' => '<controller>/index',
        '/' => 'default/index',
        '<controller:(category)>/<id:\d+>' => '<controller>/index',

    ],
];
