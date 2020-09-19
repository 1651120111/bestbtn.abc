<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'ss/bootstrap.min.css',
        'css/plugin.css',
        'css/style.css',
        'css/responsive.css',
        '//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'
    ];
    public $js = [
        'js/jquery.js',
        'js/plugin.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
