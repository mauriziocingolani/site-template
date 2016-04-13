<?php

namespace app\assets;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle {

//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $css = [
        'css/website.css',
    ];
    public $js = [
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        '\rmrevin\yii\fontawesome\AssetBundle',
    ];

}
