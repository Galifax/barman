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
                <form action="/task/ceate">
                    <input type="text" placeholder="Что нужно сделать?">
                    <button class="b-button">
                        <span>Найти специалиста</span>
                    </button>
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
