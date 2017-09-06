<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Заполните поля для регистрации:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="col-md-6" style="padding-left: 0">
                <div class="btn btn-info" style="width: 100%;">
                <?= $form->field($selection, 'status')->radio(['label' => 'Работодатель', 'value' => 0, 'id' => 'radio1']) ?>
                </div>
                </div>

                <div class="col-md-6" style="padding-right: 0">
                <div class="btn btn-danger" id="rad2" style="width: 100%;">
                <?= $form->field($selection, 'status')->radio(['label' => 'Работник', 'value' => 1, 'id' => 'radio2']) ?>
                </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
