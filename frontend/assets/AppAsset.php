<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend/assets';
    public $css = [
        'css/site.css',
        'css/style.css',
        'css/swiper.css',
        'css/dark.css',
        'css/font-icons.css',
        'css/font-pandit.css',
        'css/magnific-popup.css',
        'css/responsive.css',
        'css/colors.css',
        'css/custom.css',
        'css/animate.css',
        'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic',
    ];
    public $js = [
        'js/functions.js',
        'js/switcher.js',
        'js/plugins.js'
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
