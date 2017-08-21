<?php
    use yii\widgets\Pjax;
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\jui\DatePicker;


    ?>
  

<h1>Профиль: <?= $model->name?></h1>
<?= $selection->status?>
<?php $form = ActiveForm::begin([
    'options' => ['data-pjax' => true],
]) ?>
	<?php if ($selection->status == 1 ):?>
    <?= $form->field($model, 'id')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>
    <?= $form->field($model, 'avatar')->textInput() ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'surname')->textInput() ?>
    <?= $form->field($model, 'patronymic')->textInput() ?>
    <?= $form->field($model, 'born')->textInput() ?>
    <?= $form->field($model, 'category')->textInput() ?>
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

