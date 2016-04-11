<?php
namespace backend\assets;

use yii\web\AssetBundle;

class RaphaelAsset extends AssetBundle
{
    public $sourcePath = '@bower/raphael';
    public $baseUrl = '@web';

    public $js = [
        'raphael-min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
//        'backend\assets\JqueryAsset',
    ];
}