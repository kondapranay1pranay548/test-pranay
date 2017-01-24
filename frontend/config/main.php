<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-practical-a-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
     'modules' => [
        'social' => [
            'class' => 'frontend\module\social\social',
            'class' => 'kartik\social\Module',
 
        // the global settings for the facebook widget
        'facebook' => [
            'appId' => '278268065717396',
        ],
            'google' => [
            'clientId' => '338344315502-uv3ula05sm16g8r5s104bqokjue2mpj5',
            //'pageId' => '',
            'profileId' => '111988589034406530720',
        ],

        ],
        'redactor' => 'yii\redactor\RedactorModule', 
        'class' => 'yii\redactor\RedactorModule',
        'uploadDir' => '@webroot/assets/uploads',
        'uploadUrl' => 'book-now/custome-booking',
 
         
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ]
    ],
    'params' => $params,
];
