<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Pjax;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

?>
<?php Pjax::begin([
    'linkSelector' => '.basket-next',
]) ?>
<?php
echo $this->render('head', ['mark' => $mark]);
?>

    <div class="container-fluid my-5">
        <?php $form = ActiveForm::begin([
            'action' => Url::toRoute('/basket/order'),
            'method' => 'post',
            'id' => 'order-form',
        ]); ?>

        <!--        <form action="--><? //= ?><!--" name="order" method="post">-->
        <div class="row">
            <div class="col-md-6 pt-3" style="border: 5px solid transparent;">
                <h2 class="h3 pb-3">Детали заказа</h2>
                <div class="row">
                    <div class="col">
                        <div class="form-group">

                            <?= $form->field($model, 'firstName')->textInput(['value' => $userData['firstName']]) ?>
                            <!--                                <input type="text" class="form-control" id="exampleInputFirstName1">-->
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">

                            <?= $form->field($model, 'lastName')->textInput(['value' => $userData['lastName']]) ?>
                            <!--                                <input type="text" class="form-control" id="exampleInputLastName1">-->
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <?= $form->field($model, 'address')->textInput() ?>

                </div>
                <div class="form-group">

                    <?= $form->field($model, 'city')->textInput() ?>

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
                            <?= $form->field($model, 'email')->textInput(['value' => $userData['email']]) ?>
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
                            'courier' => 'Наличными курьеру',
                            'byYourself' => 'Самовывоз',
                        ]); ?>
                    </div>
                    <div class="form-group form-check">
                        <?= $form->field($model, 'isAgree')->checkbox([]); ?>

                    </div>

                </div>
                <a class="btn btn-primary basket-next" href="<?= Url::toRoute('/basket') ?>" role="button">Назад</a>
                <?= Html::submitButton('Оформить', ['class' => 'btn btn-primary']) ?>

            </div>

        </div>
        <!--        </form>-->
        <?php ActiveForm::end(); ?>
    </div>
<?php Pjax::end() ?>