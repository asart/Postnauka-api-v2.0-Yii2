<?php
namespace backend\assets;

use yii\web\AssetBundle;

class MorrisjsAsset extends AssetBundle
{
    public $sourcePath = '@bower/morrisjs';
    public $baseUrl = '@web';

    public $css = [
        'morris.css',
    ];

    public $js = [
        'morris.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
//        'backend\assets\JqueryAsset',
        'backend\assets\RaphaelAsset',
    ];
}