<?php
namespace lab\modules\v1;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
    }
}