<?php
namespace backend\assets;

use yii\web\AssetBundle;

class JqueryAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery';
    public $baseUrl = '@web';

    public $js = [
        'dist/jquery.min.js',
    ];

    public $depends = [
//        'yii\web\JqueryAsset',
    ];
}