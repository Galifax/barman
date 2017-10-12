<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\models\Profile;
use frontend\models\User;
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
<?php 
if(Yii::$app->user->id){
$profile = Profile::find()->where(['id'=>Yii::$app->user->id])->one();
}
?>

<div class="wrap">
    <div class="mainbody container-fluid">
        <div class="row">
            <div class="navbar-wrapper">
                <div class="container-fluid">
                    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                            class="icon-bar"></span><span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/" style="margin-right:-8px; margin-top:-5px;">
                                    <img alt="Brand" src="https://lut.im/7trApsDX08/GeilMRp1FIm4f2p7.png" width="30px" height="30px">
                                </a>
                                <a class="navbar-brand" href="/">Barman*</a>
                                <i class="brand_network"><small><small>diaspora* Network</small></small></i>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="./ORqmj">Stream</a></li>
                                    <li><span class="badge badge-important">2</span><a href="#"><i class="fa fa-bell-o fa-lg" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                            <img src="<?=empty($profile->avatar)? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $profile->avatar?>" class="img-responsive img-circle" title="John Doe" alt="John Doe" width="30px" height="30px">
                                        </span>
                                        <?php if(Yii::$app->user->id):?>
                                            <span class="user-name">
                                            <?= $profile->name?> <?= $profile->surname?>
                                        </span>
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <img src="<?=empty($profile->avatar)? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $profile->avatar?>" class="img-responsive" width="120px" height="120px" />
                                                            
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span><?= $profile->name?> <?= $profile->surname?></span>
                                                            <p class="text-muted small">
                                                                <?= $profile->user->email?></p>
                                                            <div class="divider">
                                                            </div>
                                                            <a href="<?=Url::to(['/profile'])?>" class="btn btn-default btn-xs"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-footer">
                                                    <div class="navbar-footer-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="<?=Url::to(['/site/logout'])?>"><i class="fa fa-power-off" class="btn btn-default btn-sm pull-right" aria-hidden="true"></i> Выйти</a>
                                            <?php else:?>
                                                                <a href="<?=Url::to(['/site/login'])?>" value="/site/login" class="btn btn-default btn-sm pull-right"><i class="fa fa-power-off" aria-hidden="true"></i> Войти</a>
                                                                <a href="<?=Url::to(['/site/signup'])?>" value="/site/signup" class="btn btn-default btn-sm pull-right"><i class="fa fa-upload" aria-hidden="true"></i>Регистрация</a>
                                            <?php endif;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-main bg" style="margin-top: 70px">
        <input type="text" name="" id="notify">
        <button onclick="notifyMe()">Notify me!</button>
            <?=$content?>
        </div>
    </div>
</div>

<!--<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">-->
<!--footer start from here-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 footer-col">
                <div class="logofooter"> Logo</div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                <p><i class="fa fa-map-pin"></i> #228, Tiruvannamalai, Tamilnadu, India</p>
                <p><i class="fa fa-phone"></i> Phone (India) : +91 9999 999 999</p>
                <p><i class="fa fa-envelope"></i> E-mail : info@prabuuideveloper.com</p>

            </div>
            <div class="col-md-3 col-sm-6 footer-col">
                <h6 class="heading7">GENERAL LINKS</h6>
                <ul class="footer-ul">
                    <li><a href="#"> Career</a></li>
                    <li><a href="#"> Privacy Policy</a></li>
                    <li><a href="#"> Terms & Conditions</a></li>
                    <li><a href="#"> Client Gateway</a></li>
                    <li><a href="#"> Ranking</a></li>
                    <li><a href="#"> Case Studies</a></li>
                    <li><a href="#"> Frequently Ask Questions</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footer-col">
                <h6 class="heading7">LATEST POST</h6>
                <div class="post">
                    <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                    <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                    <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 footer-col">
                <h6 class="heading7">Social Media</h6>
                <ul class="footer-social">
                    <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
                    <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
                    <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--footer start from here-->

<div class="copyright">
    <div class="container">
        <div class="col-md-6">
            <p>© 2016 - All Rights with prabuuideveloper</p>
        </div>
        <div class="col-md-6">
            <ul class="bottom_ul">
                <li><a href="#">prabuuideveloper.com</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Faq's</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Site Map</a></li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
if(Notification.requestPermission()){
    var e = new Notification('kabanchik', {
        body: "Открытие кабанчика этой осенью",
        icon: "http://picslife.ru/wp-content/uploads/2012/10/krasivyie-foto-oseni_28.jpg",
        tag: '123456',
        requireInteraction: true
    });
  }


</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
