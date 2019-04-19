<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

<<<<<<< HEAD
    <p>Пожалуйста заполните поля, чтобы авторизироваться на сайте:</p>
=======
    <p>Please fill out the following fields to login:</p>
>>>>>>> master
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

<<<<<<< HEAD
            <?= $form->field($model, 'captcha', ['inputOptions' => ['autocomplete' => 'off']])->widget(\yii\captcha\Captcha::class) ?>
=======
            <?= $form->field($model, 'captcha')->widget(\yii\captcha\Captcha::class) ?>
>>>>>>> master

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
<<<<<<< HEAD
                    <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    <?= Html::a('Регистрация', ['signup'], ['class' => 'btn btn-warning']) ?>
=======
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    <?= Html::a('Register', ['signup'], ['class' => 'btn btn-warning']) ?>
>>>>>>> master
                </div>
            </div>

            <?php ActiveForm::end(); ?>

<<<<<<< HEAD
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::a('Восстановить пароль', ['request-password-reset']) ?>
            </div>

=======
>>>>>>> master
        </div>
    </div>
</div>
