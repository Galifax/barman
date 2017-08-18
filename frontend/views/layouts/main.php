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

    <nav class="navbar navbar-color navbar-fixed-top">
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
                                        <div class="col-xs-4">
                                            <p class="text-center">
                                                <span class="glyphicon glyphicon-user icon-size"></span>
                                            </p>
                                        </div>
                                        <div class="col-xs-8">
                                            <p class="text-left"><strong><?= $profile->name?></strong>Galifa</p>
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



    <div class="container bg" style="height: 100vh">
        <?=$content?>

    </div>
</div>

<footer class="footer">
    <div class="container bg">

        <div class="margin">
            <div class="footer-img-block bg-img1">
            <div class="img-block-text col-md-6 col-sm-7">
                <h2>Помочь с выбором подходящего специалиста?</h2>
                <p>Разместите заявку и в течение 10 минут мы найдем несколько компетентных специалистов для вашей задачи.</p>
                <a href="/">Оформить заявку</a>
            </div>
        </div>
        </div>

        <div class="margin">
            <h3 class="text-center">Как работает Barmen</h3>

            <ul class="ul-li-imgs">
                <li class="ul-li-img col-sm-4">
                    <span class="ul-li-img-arrow glyphicon glyphicon-menu-right xs-hidden"></span>
                    <a href="/">
                        <img class="ul-img" src="https://static.kabanchik.ua/static/images/hiw-1.png?r=25f08dae">
                        <h4>Создай заявку</h4>
                        <p>Опишите, что и когда нужно сделать</p>
                    </a>
                </li>
                <li class="ul-li-img col-sm-4">
                    <span class="ul-li-img-arrow glyphicon glyphicon-menu-right xs-hidden"></span>
                    <a href="/">
                        <img class="ul-img" src="https://static.kabanchik.ua/static/images/hiw-2.png?r=3f1514bf">
                        <h4>Выбери специалиста</h4>
                        <p>Оставьте отзыв и оценку исполнителю<br>
                            Создайте задание прямо сейчас</p>
                    </a>
                </li>
                <li class="ul-li-img col-sm-4">
                    <a href="/">
                        <img class="ul-img" src="https://static.kabanchik.ua/static/images/hiw-3.png?r=01ac4853">
                        <h4>Закрой заявку</h4>
                        <p>Оставьте отзыв и оценку исполнителю</p>
                    </a>
                </li>
            </ul>

            <div class="clearfix"></div>

            <p class="text-center"><a href="/" style="color: green;font-size: 18px;margin: 22px">Создайте задание</a> прямо сейчас и найдите специалиста за считанные минуты!</p>

        </div>

        <div class="margin">
             <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active slide1">
                        <div class="row"><div class="container">
                                <div class="col-md-3 text-right">
                                    <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png">
                                </div>
                                <div class="col-md-9 text-left">
                                    <h3 data-animation="animated bounceInDown">Add images, or even your logo!</h3>
                                    <h4 data-animation="animated bounceInUp">Easily use stunning effects</h4>
                                </div>
                            </div></div>
                    </div>
                    <div class="item slide2">
                        <div class="row"><div class="container">
                                <div class="col-md-7 text-left">
                                    <h3 data-animation="animated bounceInDown"> 50 animation options A beautiful</h3>
                                    <h4 data-animation="animated bounceInUp">Create beautiful slideshows </h4>
                                </div>
                                <div class="col-md-5 text-right">
                                    <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png">
                                </div>
                            </div></div>
                    </div>
                    <div class="item slide3">
                        <div class="row"><div class="container">
                                <div class="col-md-7 text-left">
                                    <h3 data-animation="animated bounceInDown">Simple Bootstrap Carousel</h3>
                                    <h4 data-animation="animated bounceInUp">Bootstrap Image Carousel Slider with Animate.css</h4>
                                </div>
                                <div class="col-md-5 text-right">
                                    <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png">
                                </div>
                            </div></div>
                    </div>
                    <div class="item slide4">
                        <div class="row"><div class="container">
                                <div class="col-md-7 text-left">
                                    <h3 data-animation="animated bounceInDown">We are creative</h3>
                                    <h4 data-animation="animated bounceInUp">Get start your next awesome project</h4>
                                </div>
                                <div class="col-md-5 text-right">
                                    <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png">
                                </div>
                            </div></div>
                    </div>

                </div>
            </div>
        </div>
        </div>

        <div class="margin text-center">
            <h2>Ищите проверенных исполнителей или выгодные заказы<br>
                с помощью сервиса Kabanchik.ua</h2>
            <div class="margin">
                <a class="btn1" href="/" style="margin-right: 10%">Найти исполнителя</a>
                <a class="btn1" href="/" style="margin-left: 10%">Стать исполнителем</a>
            </div>
        </div>
    </div>
    <div class="footer-bot">
        <div class="container" style="padding: 50px">
            <div class="col-sm-4">

                <a href="/" style="font-size: 40px; color: white">Logo</a>

                <ul class="social">
                    <li>
                        <a href="/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="/"><i class="fa fa-vk" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="/"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <ul class="footer-info" style="list-style-type: none;">
                    <li>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> Контакты службы поддержки</p>
                    </li>
                    <li>
                        <p class="text-center">   0-800-301-141<br>
                            Звонки на территории Украины бесплатные</p>
                    </li>
                    <li>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> support@kabanchik.ua</p>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5 class="text-center">О нас</h5>
                <ul class="footer-info">
                    <li>
                        <a href="/">О проекте</a>
                    </li>
                    <li>
                        <a href="/">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5 class="text-center">Как это работает</h5>
                <ul class="footer-info">
                    <li>
                        <a href="/">Как заказать услугу</a>
                    </li>
                    <li>
                        <a href="/">Как зарегистрировать компанию</a>
                    </li>
                    <li>
                        <a href="/">Гарантия и безопасность</a>
                    </li>
                    <li>
                        <a href="/">Интересные задания</a>
                    </li>
                    <li>
                        <a href="/">Последние отзывы</a>
                    </li>
                    <li>
                        <a href="/">Топ исполнителей</a>
                    </li>
                    <li>
                        <a href="/">Все категории услуг</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5 class="text-center">Помощь</h5>
                <ul class="footer-info">
                    <li>
                        <a href="/">Вопросы и ответы</a>
                    </li>
                    <li>
                        <a href="/">Публичная оферта</a>
                    </li>
                    <li>
                        <a href="/">Правила конфиденциальности</a>
                    </li>
                    <li>
                        <a href="/">Написать разработчикам</a>
                    </li>
                    <li>
                        <a href="/">Cлужба поддержки</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
