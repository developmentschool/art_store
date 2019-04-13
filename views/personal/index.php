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
                <?= $form->field($model, 'userId')->hiddenInput([
                    'value' => $userData['id'],
                ])->label(false) ?>
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
                                    'placeholder' => $userData['birthday'],
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
                    ['class' => 'btn btn-primary', 'disabled' => true]) ?>
                <?= Html::button('Редактировать', ['class' => 'btn btn-secondary personal-info-btn-edit',]) ?>
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
                <?php foreach ($addresses as $address): ?>

                    <?php $form = ActiveForm::begin([
                        'action' => Url::toRoute('/personal/address'),
                        'method' => 'post',
                    ]); ?>
                    <div class="row input-group">
                        <?= $form->field($addressModel, 'userId')->hiddenInput([
                            'value' => $userData['id'],
                        ])->label(false) ?>
                        <?= $form->field($addressModel, 'id')->hiddenInput([
                            'value' => $address['id'],
                        ])->label(false) ?>
                        <div class="col">
                            <div class="form-group">
                                <?= $form->field($addressModel, 'city')->textInput([
                                    'value' => $address['city'],
                                    'readonly' => true,
                                ]) ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <?= $form->field($addressModel, 'address')->textInput([
                                    'value' => $address['address'],
                                    'readonly' => true,
                                ]) ?>
                            </div>
                        </div>
                    </div>

                    <?= Html::submitButton('Обновить данные',
                    ['class' => 'btn btn-primary btn-sm', 'disabled' => true]) ?>
                    <?= Html::button('Редактировать',
                    ['class' => 'btn btn-secondary btn-sm personal-info-btn-edit',]) ?>
                    <?= Html::a('Удалить адрес', ["/personal/delete-address/{$address['id']}"],
                    [
                        'class' => 'btn btn-danger btn-sm disabled',
                    ]) ?>

                    <?php ActiveForm::end(); ?>
                    <hr>

                <?php endforeach; ?>
                <h4>Добавить новый адрес</h4>
                <?php $form = ActiveForm::begin([
                    'action' => Url::toRoute('/personal/address'),
                    'method' => 'post',
                ]); ?>
                <div class="row input-group">
                    <?= $form->field($addressModel, 'userId')->hiddenInput([
                        'value' => $userData['id'],
                    ])->label(false) ?>
                    <?= $form->field($addressModel, 'id')->hiddenInput([
                        'value' => null,
                    ])->label(false) ?>
                    <div class="col">
                        <div class="form-group">
                            <?= $form->field($addressModel, 'city')->textInput() ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <?= $form->field($addressModel, 'address')->textInput() ?>
                        </div>
                    </div>

                </div>
                <?= Html::submitButton('Добавить адрес',
                    ['class' => 'btn btn-primary btn-sm',]) ?>
                <?php ActiveForm::end(); ?>
                <hr>
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
                    'enableAjaxValidation' => true,
                    'validateOnSubmit' => true,
                    'validateOnType' => false,
                    'validateOnChange' => false,
                    'validateOnBlur' => false,
                ]); ?>

                <div class="form-group">
                    <?php
                    /**
                     * @var $passwordModel \app\models\PasswordChangeForm
                     */
                    ?>
                    <?= $form->field($passwordModel, 'currentPass')->passwordInput([
                        'readonly' => true,
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($passwordModel, 'newPass')->passwordInput([
                        'readonly' => true,
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($passwordModel, 'newPassRepeat')->passwordInput([
                        'readonly' => true,
                    ]) ?>
                </div>

                <?= Html::submitButton('Обновить данные',
                    ['class' => 'btn btn-primary', 'disabled' => true]) ?>
                <?= Html::button('Редактировать', ['class' => 'btn btn-secondary personal-info-btn-edit']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

