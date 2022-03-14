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
//        'css/site.css',
        'css/vendor/bootstrap.min.css',
        'css/vendor/font-awesome.css',
        'css/vendor/dlicon.css',
        'css/plugins/owl-carousel.css',
        'css/plugins/slick.css',
        'css/plugins/magnific-popup.css',
        'css/plugins/jarallax.css',
        'css/plugins/easyzoom.css',
        'css/plugins/animate.css',
        'css/plugins/fullpage.css',
        'css/plugins/jquery-ui.css',
        'css/plugins/select2.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/vendor/modernizr-3.11.7.min.js',
        'js/vendor/jquery-v3.6.0.min.js',
        'js/vendor/popper.js',
        'js/vendor/bootstrap.min.js',
        'js/plugins/owl-carousel.js',
        'js/plugins/slick.js',
        'js/plugins/jarallax.min.js',
        'js/plugins/countdown.js',
        'js/plugins/magnific-popup.js',
        'js/plugins/instafeed.js',
        'js/plugins/tilt.js',
        'js/plugins/images-loaded.js',
        'js/plugins/isotope.js',
        'js/plugins/scrolloverflow-fullpage.js',
        'js/plugins/fullpage.js',
        'js/plugins/jquery-ui.js',
        'js/plugins/jquery-ui-touch-punch.js',
        'js/plugins/easyzoom.js',
        'js/plugins/resizesensor.js',
        'js/plugins/sticky-sidebar.js',
        'js/plugins/scrollup.js',
        'js/plugins/select2.min.js',
        'js/plugins/cookie.js',
        'js/plugins/bpopup.js',
        'js/plugins/wow.js',
        'js/plugins/ajax-mail.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
