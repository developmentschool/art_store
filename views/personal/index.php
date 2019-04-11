<?php
/* @var $this yii\web\View */

/* @var $form ActiveForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\web\View;

?>


<div class="row flex-nowrap">

    <div class="col-auto">
        <div class="sidebar">
            <?= Html::a('Обо мне', ['/personal/index'], ['class' => 'btn btn-secondary btn-lg btn-block']) ?>
            <?= Html::a('Мои заказы', ['/personal/orders'], ['class' => 'btn btn-secondary btn-lg btn-block']) ?>
            <?= Html::a('Вернуться на сайт', ['/'], ['class' => 'btn btn-secondary btn-lg btn-block']) ?>
        </div>
    </div>
    <div class="col-auto flex-fill ">
        <div class="card card-body">
            <div>
                <a class="btn btn-secondary btn-block" data-toggle="collapse" href="#collapse1" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    Персональная информация
                </a>
            </div>

            <div class="collapse" id="collapse1">
                <?php $form = ActiveForm::begin([
                    'action' => Url::toRoute('/personal/info'),
                    'method' => 'post',
                    'id' => 'personal-info',
                ]); ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <?= $form->field($model, 'firstName')->textInput([
                                'value' => $userData['firstName'],
                                'readonly' => true,
                            ]) ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <?= $form->field($model, 'lastName')->textInput([
                                'value' => $userData['lastName'],
                                'readonly' => true,
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <?= $form->field($model, 'birthday')->widget(\yii\jui\DatePicker::className(), [
                                'language' => 'ru',
                                'dateFormat' => 'dd.MM.yyyy',
                                'options' => [
                                    'placeholder' => '01.01.2020',
                                    'class' => 'form-control',
                                    'autocomplete' => 'off',
                                    'readonly' => true,
                                ],
                                'clientOptions' => [
                                    'changeMonth' => true,
                                    'changeYear' => true,
                                    'yearRange' => '2015:2050',
                                    //'showOn' => 'button',
                                    //'buttonText' => 'Выбрать дату',
                                    //'buttonImageOnly' => true,
                                    //'buttonImage' => 'images/calendar.gif'
                                ],
                            ]) ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <?= $form->field($model, 'phoneNum')->textInput([
                                'value' => $userData['phone'],
                                'placeholder' => '+7(999)999-99-99',
                                'id' => 'phoneNumber',
                                'readonly' => true,
                            ]) ?>
                        </div>
                    </div>
                </div>
                <?= Html::submitButton('Обновить данные',
                    ['class' => 'btn btn-primary', 'id' => 'update-personal-info-btn', 'disabled' => true]) ?>
                <?= Html::button('Редактировать', ['class' => 'btn btn-secondary', 'id' => 'personal-info-btn-edit']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <div class="card card-body">
            <div>
                <a class="btn btn-secondary btn-block" data-toggle="collapse" href="#collapse2" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    Варианты адресов доставки товара
                </a>
            </div>
            <div class="collapse" id="collapse2">
                <?php $form = ActiveForm::begin([
                    'action' => Url::toRoute('/personal/address'),
                    'method' => 'post',
                    'id' => 'personal-address',
                ]); ?>
                <?php foreach ($addresses as $address): ?>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <?= $form->field($model, 'city')->textInput([
                                    'value' => $userData['city'],
                                    'readonly' => true,
                                ]) ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <?= $form->field($model, 'address')->textInput([
                                    'value' => $userData['address'],
                                    'readonly' => true,
                                ]) ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <?= Html::submitButton('Обновить данные',
                    ['class' => 'btn btn-primary', 'id' => 'update-addresses-btn', 'disabled' => true]) ?>
                <?= Html::button('Редактировать', ['class' => 'btn btn-secondary', 'id' => 'addresses-btn-edit']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <div class="card card-body">
            <div>
                <a class="btn btn-secondary btn-block" data-toggle="collapse" href="#collapse3" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    Сменить пароль
                </a>
            </div>
            <div class="collapse" id="collapse3">
                <?php $form = ActiveForm::begin([
                    'action' => Url::toRoute('/personal/password-change'),
                    'method' => 'post',
                    'id' => 'personal-password',
                ]); ?>

                                <div class="form-group">
                                    <?= $form->field($model, 'firstName')->textInput([
                                        'value' => $userData['firstName'],
                                        'readonly' => true,
                                    ]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $form->field($model, 'firstName')->textInput([
                                        'value' => $userData['firstName'],
                                        'readonly' => true,
                                    ]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $form->field($model, 'firstName')->textInput([
                                        'value' => $userData['firstName'],
                                        'readonly' => true,
                                    ]) ?>
                                </div>

                <?= Html::submitButton('Обновить данные',
                    ['class' => 'btn btn-primary', 'id' => 'update-addresses-btn', 'disabled' => true]) ?>
                <?= Html::button('Редактировать', ['class' => 'btn btn-secondary', 'id' => 'addresses-btn-edit']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
    <!--    <div class="col-auto flex-fill " id="dfnm">-->
    <!---->
    <!--        <h2 class="h3 pb-3">Персональная информация</h2>-->
    <!--        <form action="#">-->
    <!--            <div class="row">-->
    <!--                <div class="col">-->
    <!--                    <div class="form-group">-->
    <!--                        <label class="label" for="exampleInputFirstName1">Имя<span class="text-danger">*</span></label>-->
    <!--                        <input type="text" class="form-control" id="exampleInputFirstName1">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col">-->
    <!--                    <div class="form-group">-->
    <!--                        <label class="label" for="exampleInputLastName1">Фамилия<span-->
    <!--                                    class="text-danger">*</span></label>-->
    <!--                        <input type="text" class="form-control" id="exampleInputLastName1">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="row">-->
    <!--                <div class="col">-->
    <!--                    <div class="form-group">-->
    <!--                        <label class="label" for="exampleInputFirstName1">First Name <span class="text-danger">*</span></label>-->
    <!--                        <input type="text" class="form-control" id="exampleInputFirstName1">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col">-->
    <!--                    <div class="form-group">-->
    <!--                        <label class="label" for="exampleInputLastName1">Last Name <span-->
    <!--                                    class="text-danger">*</span></label>-->
    <!--                        <input type="text" class="form-control" id="exampleInputLastName1">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            --><? //= Html::submitButton('Обновить данные',['class'=>'btn btn-primary'])?>
    <!--        </form>-->
    <!--        <h2 class="h3 pb-3">Адреса доставки</h2>-->
    <!--        <form action="#">-->
    <!--            <div class="form-group">-->
    <!--                <label class="label" for="exampleInputEmail1">Email Address</label>-->
    <!--                <input type="email" class="form-control" id="exampleInputEmail1">-->
    <!--            </div>-->
    <!--            <fieldset>-->
    <!--                <legend>Password change</legend>-->
    <!--                <div class="form-group">-->
    <!--                    <label class="label" for="exampleInputPassword1">Current password (leave blank to leave-->
    <!--                        unchanged)</label>-->
    <!--                    <input type="text" class="form-control" id="exampleInputPassword1">-->
    <!--                </div>-->
    <!--                <div class="form-group">-->
    <!--                    <label class="label" for="exampleInputPassword2">New password (leave blank to leave-->
    <!--                        unchanged)</label>-->
    <!--                    <input type="text" class="form-control" id="exampleInputPassword2">-->
    <!--                </div>-->
    <!--                <div class="form-group">-->
    <!--                    <label class="label" for="exampleInputLastName3">Confirm new password</label>-->
    <!--                    <input type="text" class="form-control" id="exampleInputLastName3">-->
    <!--                </div>-->
    <!--            </fieldset>-->
    <!--            <button type="submit" class="btn btn-primary">Submit</button>-->
    <!--        </form>-->
    <!--    </div>-->
</div>

