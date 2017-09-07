<?php
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<?php Pjax::begin(['enablePushState' => false]);?>
    <div class="panel panel-default">
        <div class="panel-body">
            <h1 class="panel-title pull-left" style="font-size:30px;">My basic profile</h1>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <h3 class="panel-title pull-left">Your Name</h3>
            <br><br>
            <form class="form-horizontal">
                <label for="First_name">First name</label>
                <input type="text" class="form-control" id="First_name" placeholder="John" value="John">
                <label for="Last_name">Last name</label>
                <input type="email" class="form-control" id="Last_name" placeholder="Doe" value="Doe">
            </form>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <h3 class="panel-title pull-left">Describe yourself in 5 words</h3>
            <br><br>
            <form class="form-horizontal">
                <input type="text" class="form-control" id="keywords" placeholder="Like #movies #kittens #travel #teacher #newyork">
            </form>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <h3 class="panel-title pull-left">Your photo</h3>
            <br><br>
            <div align="center">
                <div class="col-lg-12 col-md-12">
                    <img class="img-thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px">
                </div>
                <div class="col-lg-12 col-md-12">
                    <button class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> Upload a new profile photo!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
          

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

?>
        </div>
        <hr>
        <div class="panel-body">
            <a href="<?=Url::to(['/profile'])?>" class="btn btn-default"><i class="fa fa-fw fa-times" aria-hidden="true"></i> Cancel</a>
            <button class="btn btn-primary"><i class="fa fa-fw fa-check" aria-hidden="true"></i> Update Profile</button>
        </div>
    </div>
<?php Pjax::end();?>