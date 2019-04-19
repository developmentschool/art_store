<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Pjax;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

?>
<?php Pjax::begin([
    'linkSelector' => '.cart-next',
]) ?>
<?php
echo $this->render('head', ['mark' => $mark]);
?>


    <div class="container-fluid my-5">
        <?php $form = ActiveForm::begin([
            'action' => Url::toRoute('/cart/order'),
            'method' => 'post',
            'id' => 'order-form',
        ]); ?>

        <div class="row">
            <div class="col-md-6 pt-3" style="border: 5px solid transparent;">
                <h2 class="h3 pb-3">Детали заказа</h2>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <?= $form->field($model, 'firstName')->textInput(['value' => $userData['firstName']]) ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <?= $form->field($model, 'lastName')->textInput(['value' => $userData['lastName']]) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <?= $form->field($model, 'city')->widget(\yii\jui\AutoComplete::className(), [

                        'clientOptions' => [
                            'source' => $userData['city'],
                        ],
                        'options' => [
                            'class' => 'form-control',
                            'value' => $userData['city'][0],
                        ],
                    ])
                    ?>

                </div>
                <div class="form-group">


                    <?= $form->field($model, 'address')->widget(\yii\jui\AutoComplete::className(), [

                        'clientOptions' => [
                            'source' => $userData['address'],
                        ],
                        'options' => [
                            'class' => 'form-control',
                            'data-userId' => $userData['id'],
                            'value' => $userData['address'][0],
                        ],
                    ])?>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">

                            <?= $form->field($model, 'phoneNum')->textInput([
                                'value' => $userData['phone'],
                                'placeholder' => '+7(999)999-99-99',
                                'id' => 'phoneNumber',
                            ]) ?>

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <?= $form->field($model, 'email')->textInput([
                                'value' => $userData['email'],
                                'placeholder' => 'name@domain.com',
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'comment')->textarea(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3" style="border: 5px solid #eeeeee;">
                    <h2 class="h3 pb-3">Ваш заказ</h2>
                    <table class="table table-bordered checkout-table">
                        <tr>
                            <th>Товар</th>
                            <th>Количество</th>
                            <th>Сумма</th>
                        </tr>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?= $product['product']->title ?></td>
                                <td><?= $product['quantity'] ?></td>
                                <td class="price"><?= $product['product']->price * $product['quantity'] ?> РУБ</td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td>Общая сумма</td>
                            <td>&nbsp;</td>
                            <td class="price"><?= $totalSum ?> РУБ</td>
                        </tr>
                    </table>

                    <div class="form-group form-check">
                        <?= $form->field($model, 'payment')->radioList([
                            'Наличными курьеру' => 'Наличными курьеру',
                            'Самовывоз' => 'Самовывоз',
                        ],
                            [

                                'item' => function ($index, $label, $name, $checked, $value) {
                                    $id = 'my-' . $index;
                                    return
                                        Html::beginTag('div', ['class' => 'form-check'])
                                        . Html::radio($name, true, [
                                            'value' => $value,
                                            'class' => 'form-check-input',
                                        ])
                                        . '<label class="form-check-label" for="{$id}">'
                                        . $label
                                        . '</label>'
                                        . Html::endTag('div');

                                },
                            ]
                        ); ?>
                    </div>
                    <div class="form-group form-check">
                        <?= $form->field($model, 'isAgree')->checkbox(['value' => 1, 'uncheckValue' => 0]); ?>
                    </div>
                </div>
                <a class="btn btn-primary basket-next" href="<?= Url::toRoute('/cart') ?>" role="button">Назад</a>
                <?= Html::submitButton('Оформить', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
<?php Pjax::end() ?>