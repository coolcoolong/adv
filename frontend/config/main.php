<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-' . YII_ENV . '.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-' . YII_ENV . '.php')
);

return [
    'id' => APPLICATION,
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'timeZone' => 'Asia/Shanghai',
    'language' => 'zh-CN',
    'runtimePath' => realpath(__DIR__ . '/../../runtime/frontend'),
    'defaultRoute' => '/index/index',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => [
                        '@app/themes/default/views',
                        '@app/views',
                    ]
                ]
            ]
        ]

    ],
    'params' => $params,
];
