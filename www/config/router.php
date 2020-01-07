<?php
return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => false,
    'rules' => [
        '<controller:(code)>/<code:[a-zA-Z0-9\-_]+>' => '<controller>/index',
        '<controller:(category)>/<id:\d+>' => '<controller>/index',
        '<action:\w+>'=>'company/<action>',
        '/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
    ],
];
