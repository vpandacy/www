<?php
return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => false,
    'rules' => [
        '/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
        '<controller:(page)>/<media_id:\d+>/info/<project_id:\d+>' => '<controller>/index',
    ],
];
