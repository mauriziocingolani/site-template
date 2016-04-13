<?php

include '../vendor/mauriziocingolani/yii2-fmwk-php/Config.php';

use mauriziocingolani\yii2fmwkphp\Config;

$config = new Config(sha1('yii2 website template'), dirname(__DIR__), 'files');
$config->addUserComponent();
$config->addModule([
    'social' => [
        'class' => 'kartik\social\Module',
        'googleAnalytics' => [
            'id' => $config->getParam('googleAnalytics', 'id'),
            'domain' => $config->getParam('googleAnalytics', 'domain'),
        ],
    ]
]);
//    $config->catchAll = ['site/comingsoon'];
$config->name = 'Yii2 Website Template';
$config->version = 'RC1';
return $config->getConfig();
