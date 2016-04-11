<?php
namespace backend\assets;

use yii\web\AssetBundle;

class MetisMenuAsset extends AssetBundle
{
    public $sourcePath = '@bower/metisMenu';
    public $baseUrl = '@web';

    public $css = [
        'dist/metisMenu.min.css',
    ];

    public $js = [
        'dist/metisMenu.min.js',
//        'dist/metisMenu.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
//        'backend\assets\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}