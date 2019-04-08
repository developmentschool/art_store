<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$cloudinary = require __DIR__ . '/cloudinary.php';
$mail = require __DIR__ . '/mail.php';

$config = [
    'id' => 'basic',
    'name' => 'ArtStore',
    'language' => 'ru-RU',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'layout' => 'art_store/main',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@bigImg' => '@app/web/img/big',
        '@midImg' => '@app/web/img/mid',
        '@smallImg' => '@app/web/img/small',
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Admin',
        ],
    ],
    'components' => [
        'basket' => [
            'class' => '\app\components\BasketComponent',
        ],
        'cloudinary' => [
            'class' => '\app\components\CloudinaryComponent',
            'cloud_name' => $cloudinary['cloud_name'],
            'api_key' => $cloudinary['api_key'],
            'api_secret' => $cloudinary['api_secret'],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ttLpN8mfk0zDy-adsCsV6QIAwr40vO2O',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => $mail['host'],
                'username' => $mail['username'],
                'password' => $mail['password'],
                'port' => $mail['port'],
                'encryption' => $mail['encryption'],
                'streamOptions' => [
                    'ssl' => [
                        'allow_self_signed' => true,
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                    ],
                ],
            ],
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                '/' => 'site/index',
                '<module:(admin)>/' => '<module>/default',
                '<module1:(admin)>/<module2:(rbac)>' => '<module1>/<module2>/assignment',
                '<module1:(admin)>/<module2:(rbac)>/<controller:[\w-]+>' => '<module1>/<module2>/<controller>',
                '<module1:(admin)>/<module2:(rbac)>/<controller:[\w-]+>/<id:\d+>' => '<module1>/<module2>/<controller>/view',
                '<module1:(admin)>/<module2:(rbac)>/<controller:[\w-]+>/<action:\w+>/<id:\w+>' => '<module1>/<module2>/<controller>/<action>',
                '<module:(admin)>/<controller:[\w-]+>' => '<module>/<controller>',
                '<module:(admin)>/<controller:[\w-]+>/<action:[\w-]+>' => '<module>/<controller>/<action>',
                '<module:(admin)>/<controller:[\w-]+>/<action:[\w-]+>/<id:\w+>' => '<module>/<controller>/<action>',
                //'<module:(admin)>/<controller:[\w-]+>/<id:\d+>' => '<module>/<controller>/view',
                '<controller:\w+>' => '<controller>/index',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',

                '<controller:\w+>/<action:[\w-]+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:[\w-]+>' => '<controller>/<action>',
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            //'defaultRoles' => ['guest'],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['*', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
