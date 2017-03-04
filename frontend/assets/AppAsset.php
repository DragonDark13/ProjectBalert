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
        'css/font-awesome.css',
        'css/ballert_style.css',
        'css/jquery.ui.core.min.css',
        'css/datepicker.min.css',
        'css/jquery.ui.button.min.css',
        'css/jquery.ui.tabs.min.css',
        'css/jquery.ui.theme.min.css'
    ];
    public $js = [
        'js/Script_Igor.js',
        'js/Script_Sacha.js',
        'js/jquery.viewportchecker.js',
        'js/tab.js',
        'js/transition.js',
        'js/dropdown.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
