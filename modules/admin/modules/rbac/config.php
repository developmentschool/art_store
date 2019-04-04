<?php
return [
    'config' => [
        'basePath' => __DIR__,
        'aliases' => [
            '@rbac' => __DIR__,
        ],
    ],
    'components' => [
        'i18n' => [
            'translations' => [
                'yii2mod.rbac' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@rbac/messages',
                ],
            ],
        ]
    ]
];
