<?php
return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => false,
    'rules' => [
        '<controller:(code)>/<code:[a-zA-Z0-9\-_]+>' => '<controller>/index',
        '/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
        '<controller:(page)>/<media_id:\d+>/info/<project_id:\d+>' => '<controller>/index',
    ],
];
