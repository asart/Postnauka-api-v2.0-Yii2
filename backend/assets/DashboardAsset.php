<?php
namespace backend\assets;

use yii\web\AssetBundle;

class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/sb-admin-2.css',
        'css/timeline.css',
    ];

    public $js = [
        'js/sb-admin-2.js',
//        'js/moris-data.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'backend\assets\MetisMenuAsset',
        'backend\assets\MorrisjsAsset',
        'backend\assets\FontAsset',
    ];
}
