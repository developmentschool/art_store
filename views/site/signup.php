<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \app\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

<<<<<<< HEAD
$this->title = 'Регистрация';
=======
$this->title = 'Signup';
>>>>>>> master
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

<<<<<<< HEAD
    <p>Пожалуйста, заполните форму для регистрации:</p>
=======
    <p>Please fill out the following fields to signup:</p>
>>>>>>> master

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin([
                'id' => 'form-signup',
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'password_repeat')->passwordInput() ?>

<<<<<<< HEAD
            <?= $form->field($model, 'captcha', ['inputOptions' => ['autocomplete' => 'off']])->widget(\yii\captcha\Captcha::class) ?>

            <div class="form-group">
                <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
=======
            <?= $form->field($model, 'captcha')->widget(\yii\captcha\Captcha::class) ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
>>>>>>> master
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>