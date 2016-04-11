<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use backend\assets\DashboardAsset;
//use academy\models\CourseApplication as MainCourse;

/* @var $this \yii\web\View */
/* @var $content string */

DashboardAsset::register($this);

//$count = MainCourse::find()->where(['status' => MainCourse::STATUS_NEW])->count('id');
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Навигация</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://postnauka.ru">postnauka.ru</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <?php if (!Yii::$app->user->isGuest) { ?>


                <?php } ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <?php if (!Yii::$app->user->isGuest) { ?>
                            <!--            <li>-->
                            <!--                <a href="#"><i class="fa fa-user fa-fw"></i> Профиль</a>-->
                            <!--            </li>-->
                            <!--            <li>-->
                            <!--                <a href="#"><i class="fa fa-gear fa-fw"></i> Настройки</a>-->
                            <!--            </li>-->
                            <!--            <li class="divider"></li>-->
                            <li>
                                <a href="/site/logout" data-method="post"><i class="fa fa-sign-out fa-fw"></i> Выход</a></a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Вход</a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li<?= (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') ? ' class="active"' : '' ?>>
                            <a href="<?= Url::toRoute('/site/index') ?>"><i class="fa fa-dashboard fa-fw"></i> Главная</a>
                        </li>



                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Спецпроекты<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li<?= (Yii::$app->controller->action->id == 'index' && Yii::$app->controller->id == 'specials') ? ' class="active"' : '' ?>>
                                    <a href="<?= Url::toRoute('/specials/index') ?>">Спецпроекты</a>
                                </li>
                                <li<?= (Yii::$app->controller->action->id == 'index' && Yii::$app->controller->id == 'partner') ? ' class="active"' : '' ?>>
                                    <a href="<?= Url::toRoute('/partner/index') ?>">Партнеры</a>
                                </li>
                            </ul>
                        </li>

                        <li<?= (Yii::$app->controller->action->id == 'index' && Yii::$app->controller->id == 'reklama') ? ' class="active"' : '' ?>>
                            <a href="<?= Url::toRoute('/reklama/index') ?>"><i class="fa fa-edit fa-fw"></i> Реклама</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>

    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>