<?php
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<?php Pjax::begin(['enablePushState' => false]);?>
    
    <div class="panel panel-default">
        <div class="panel-body">
          

<?php $form = ActiveForm::begin([
    'options' => ['data-pjax' => true],
]) ?>
<?php if ($selection->status == 1 ):?>
    <?= $form->field($model, 'id')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>
    <?= $form->field($model, 'file')->fileInput()->label('Аватар')?>

    <a class="btn btn-danger" href="<?=Url::to(['settings', 'ava' => $model->id])?>">Удалить</a>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'surname')->textInput() ?>
    <?= $form->field($model, 'patronymic')->textInput() ?>
    <?= $form->field($model, 'born')->textInput() ?>
    <?= $form->field($model, 'category')->textInput() ?>
    <?= $form->field($model, 'gender')->dropDownList([
    '1' => 'Мужской',
    '0' => 'Женский',
    ])->label('Пол') ?>
    <?= $form->field($model, 'about_me')->textInput() ?>
    <?= $form->field($model, 'from')->textInput() ?>
    <?= $form->field($model, 'contacts')->textInput() ?>

<?php else:?>

    <?= $form->field($model, 'id')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>
    <?= $form->field($model, 'avatar')->textInput() ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'born')->textInput() ?>
    <?= $form->field($model, 'category')->textInput() ?>
    <?= $form->field($model, 'about_me')->textInput() ?>
    <?= $form->field($model, 'from')->textInput() ?>
    <?= $form->field($model, 'contacts')->textInput() ?>
<?php endif;?>

<div class="form-group">
    <?= Html::submitButton('Редактировать', ['class' => 'btn btn-success']) ?>
</div>
<?php ActiveForm::end();

?>
<?php Pjax::end();?>