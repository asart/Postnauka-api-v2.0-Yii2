<?php
namespace backend\assets;

use yii\web\AssetBundle;

class FontAsset extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';
    public $baseUrl = '@web';

    public $css = [
        'css/font-awesome.min.css',
    ];
}