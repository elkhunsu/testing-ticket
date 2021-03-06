<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/jquery-jvectormap-1.2.2.css',
        'css/ionicons.css',
    ];
    public $js = [
        'js/jquery-jvectormap-1.2.2.min.js',
        'js/Chart.min.js',
        'js/test.js',
    ];
    public $font = [
        'font/ionicons.ttf',
        'font/fontawesome-webfont.ttf',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];

}
