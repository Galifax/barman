<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\models\Profile;
use frontend\models\Category;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php $profile = Profile::find()->where(['id'=>Yii::$app->user->id])->one()?>
<?php $category = Category::find()->where(['parent_id' => 0])->with('category')->all()?>
<div class="wrap">

    <nav class="navbar navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed visible-xs" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="glyphicon glyphicon-user"></span> 
                </button>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                    <span class="glyphicon glyphicon-menu-hamburger"></span>
                </button>
                <a class="navbar-brand" href="#">Brand Logo !!!</a>
            </div>

            <div class="collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav visible-xs"  style="background-color: whitesmoke">
                            <li class="dropdown dropdown-large">
                                <div class="navbar-login">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p class="text-center">
                                                <span class="glyphicon glyphicon-user icon-size"></span>
                                            </p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="text-left"><strong><?= $profile->name?></strong></p>
                                            <p class="text-left small">Место для текста?!</p>
                                            <p class="text-left">
                                                <a href="#" class="btn btn-primary btn-block btn-sm">Мой Профиль</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="navbar-login navbar-login-session">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>
                                                <a href="#" class="btn btn-danger btn-block">Выйти</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a href="/">Стать исполнителем</a>
                    </li>

                    <li class="dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> 
                            <strong><?= $profile->name?></strong>
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="navbar-login">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p class="text-center">
                                                <span class="glyphicon glyphicon-user icon-size"></span>
                                            </p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="text-left"><strong><?= $profile->name?></strong></p>
                                            <p class="text-left small">Место для текста?!</p>
                                            <p class="text-left">
                                                <a href="#" class="btn btn-primary btn-block btn-sm">Мой Профиль</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="navbar-login navbar-login-session">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>
                                                <a href="#" class="btn btn-danger btn-block">Выйти</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-large">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Создать задание<b class="caret"></b></a>

                        <ul class="dropdown-menu dropdown-menu-large row">
                            <?php foreach($category as $cat):?>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header"><?= $cat->name?></li>
                                    <?php foreach($cat->category as $category):?>
                                    <li><a href="#"><?= $category->name?></a></li>
                                    <?php endforeach;?>
                                    
                                </ul>
                            </li>
                        <?php endforeach;?>
                        </ul>

                    </li>
                </ul>

                <!-- Search Form -->
                <form role="form">

                    <!-- Search Field -->
                    <div class="row">
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="search" placeholder="Search" required/>
                                <span class="input-group-btn">
                            <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"><span style="margin-left:10px;">Search</span></button>
                        </span>
                                </span>
                            </div>
                        </div>
                    </div>

                </form>
                <!-- End of Search Form -->


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>



    <div class="container">
        <?=$content?>

    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer-img-block bg-img1">
            <div class="img-block-text col-md-6">
                <h2>Помочь с выбором подходящего специалиста?</h2>
                <p>Разместите заявку и в течение 10 минут мы найдем несколько компетентных специалистов для вашей задачи.</p>
                <a href="/">Оформить заявку</a>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
