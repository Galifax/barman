<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
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
                                            <p class="text-left"><strong>Galifax</strong></p>
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
                            <strong>Galifax</strong>
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
                                            <p class="text-left"><strong>Galifax</strong></p>
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
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Заголовок 1</li>
                                    <li><a href="#">Услуга 1</a></li>
                                    <li><a href="#">Услуга 2</a></li>
                                    <li><a href="#">Услуга 3</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Заголовок 2</li>
                                    <li><a href="#">Услуга 1</a></li>
                                    <li><a href="#">Услуга 2</a></li>
                                    <li><a href="#">Услуга 3</a></li>
                                    <li><a href="#">Услуга 4</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Заголовок 3</li>
                                    <li><a href="#">Услуга 1</a></li>
                                    <li><a href="#">Услуга 2</a></li>
                                    <li><a href="#">Услуга 3</a></li>
                                    <li><a href="#">Услуга 4</a></li>
                                    <li><a href="#">Услуга 5</a></li>
                                    <li><a href="#">Услуга 6</a></li>
                                    <li><a href="#">Услуга 7</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Заголовок 4</li>
                                    <li><a href="#">Услуга 1</a></li>
                                    <li><a href="#">Услуга 2</a></li>
                                    <li><a href="#">Услуга 3</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Заголовок 5</li>
                                    <li><a href="#">Услуга 1</a></li>
                                    <li><a href="#">Услуга 2</a></li>
                                    <li><a href="#">Услуга 3</a></li>
                                    <li><a href="#">Услуга 4</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Заголовок 6</li>
                                    <li><a href="#">Услуга 1</a></li>
                                    <li><a href="#">Услуга 2</a></li>
                                    <li><a href="#">Услуга 3</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Заголовок 1</li>
                                    <li><a href="#">Услуга 1</a></li>
                                    <li><a href="#">Услуга 2</a></li>
                                    <li><a href="#">Услуга 3</a></li>
                                    <li><a href="#">Услуга 4</a></li>
                                </ul>
                            </li>
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


    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
