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
    'bootstrap' => ['log', 'admin'],
    'controllerNamespace' => 'backend\controllers',
    'defaultRoute' => 'index',
    'timeZone' => 'Asia/Shanghai',
    'language' => 'zh-CN',
    'runtimePath' => realpath(__DIR__ . '/../../runtime/backend'),
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
            //'layout' => 'left-menu',//yii2-admin的导航菜单
        ]
    ],
    'components' => [
        'user' => [
            'identityClass' => 'backend\models\User',
            'enableAutoLogin' => false,
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
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // 使用数据库管理配置文件
            'db' => 'backend_db',
            'itemTable' => '{{%auth_item}}',
            'assignmentTable' => '{{%auth_assignment}}',
            'itemChildTable' => '{{%auth_item_child}}',
            'ruleTable' => '{{%auth_rule}}'
        ]
    ],
    'aliases' => [
        '@mdm/admin' => '@vendor/mdmsoft/yii2-admin',
    ],
    'as access' => [
        'class' => 'mdm\admin\classes\AccessControl',
        'allowActions' => [ //允许访问的节点，可自行添加
            'site/*',
        ]
    ],
    'params' => $params,
];
