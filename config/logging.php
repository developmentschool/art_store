<?php

if (getenv("DYNO")) {
    return [
        [
            'class' => 'codemix\streamlog\Target',
            'url' => 'php://stdout',
            'levels' => ['info', 'trace'],
            'logVars' => [],
        ],
        [
            'class' => 'codemix\streamlog\Target',
            'url' => 'php://stderr',
            'levels' => ['error', 'warning'],
            'logVars' => [],
        ],
    ];
}
return [
    [
        'class' => 'yii\log\FileTarget',
        'levels' => ['error', 'warning'],
    ],
];
