<?php

/* @var $this yii\web\View */

$this->title = 'Barmen';
?>
<div class="main-page">
    <div class="main-promo">
        <div class="main-promo__content">
            <h1 class="main-promo__title">Онлайн-сервис заказа услуг</h1>
            <p class="main-promo__subtitle">Более 100 000 проверенных специалистов для выполнения ваших бытовых или бизнес задач Найти специалиста </p>
            <div class="main-promo__search">
                <form class="clearfix" action="/task/ceate">
                    <div class="main-promo__search-button">
                        <button class="b-button">
                            <span>Найти специалиста</span>
                        </button>
                    </div>
                    <div class="main-promo__search-field">
                        <input type="text" placeholder="Что нужно сделать?">
                    </div>
                </form>
                <div class="main-promo__search-hint">
                    Например:
                    <span class="main-promo__search-hint-link">убрать в квартире</span>
                </div>
            </div>
        </div>
        <div class="main-promo__ancors">
            
        </div>
    </div>
</div>

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
        <div class="margin row">
            <div class="col-sm-6">
                <a class="btn1" href="/">Найти исполнителя</a>
            </div>
            <div class="col-sm-6 f1">
                <a class="btn1" href="/">Стать исполнителем</a>
            </div>
        </div>
    </div>
</div>