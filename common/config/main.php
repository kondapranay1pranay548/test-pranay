<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        
        'urlManager' => [
    'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => false,
    'rules' => [
        'pandit-services-in-hyderabad' => 'site/pandit-services-in-hyderabad',
        //'pooja-services<sp:\w+>' => 'site/sub-services',
        'pooja-service/<service:\w+>' => 'site/sub-services',
        'book-now/<booking_pooja:\w+>-<slug:[A-Za-z0-9 -_.]+>' => 'site/book-now',
        '<final_service:\w+>-<slug:[A-Za-z0-9 -_.]+>' => 'site/service-view',
        //'<slug>' => 'site/service-view',
        
        
        //'services/<service:\w+>' => 'site/su-services',
        //'ab/<ser:\w+>' => 'baba/check',
    ],
],
        'sms' => [
            'class' => 'darkunz\yii2sms\Twilio',
            'sid' => 'ACb0564f8d40409a421b237dd76b5e1c3f',
            'token' => '73b0e498e3ff1d62a0ac7b7e6e107667',
            'number' => '+14049396991',
        ],
    ],
];
