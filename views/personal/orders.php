<?php
/* @var $this \yii\web\View */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url; ?>
<div class="row flex-nowrap">
    <!--<h2 class="h3 pb-3">Ваши заказы</h2>-->
    <!--<table class="table table-bordered checkout-table">-->
    <!--    <tr>-->
    <!--        <th>Товар</th>-->
    <!--        <th>Количество</th>-->
    <!--        <th>Сумма</th>-->
    <!--    </tr>-->
    <!--    --><?php //foreach ($products as $product): ?>
    <!--        <tr>-->
    <!--            <td>--><? //= $product['product']->title ?><!--</td>-->
    <!--            <td>--><? //= $product['quantity'] ?><!--</td>-->
    <!--            <td class="price">--><? //= $product['product']->price * $product['quantity'] ?><!-- РУБ</td>-->
    <!--        </tr>-->
    <!--    --><?php //endforeach; ?>
    <!--    <tr>-->
    <!--        <td>Общая сумма</td>-->
    <!--        <td>&nbsp;</td>-->
    <!--        <td class="price">--><? //= $totalSum ?><!-- РУБ</td>-->
    <!--    </tr>-->
    <!--</table>-->
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
                <a class="btn btn-secondary btn-block" data-toggle="collapse" href="#collapse3" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    Заказ № 1 от 24.01.2019
                </a>
            </div>
            <div class="collapse" id="collapse3">
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Продукт</th>
                        <th>Цена</th>
                        <th class="text-center">Количество</th>
                        <th>Сумма</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>
                        <td class="price">1000 РУБ</td>
                        <td class="text-center">10</td>
                        <td class="price">1000 РУБ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>
                        <td class="price">1000 РУБ</td>
                        <td class="text-center">10</td>
                        <td class="price">1000 РУБ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>
                        <td class="price">1000 РУБ</td>
                        <td class="text-center">10</td>
                        <td class="price">1000 РУБ</td>
                    </tr>
                    <tr>
                        <td>Общая сумма</td>
                        <td>&nbsp;</td>
                        <td class="price">10000 РУБ</td>
                    </tr>
                </table>

                <?= Html::submitButton('Обновить данные',
                    ['class' => 'btn btn-primary', 'id' => 'update-addresses-btn', 'disabled' => true]) ?>
                <?= Html::button('Редактировать', ['class' => 'btn btn-secondary', 'id' => 'addresses-btn-edit']) ?>

            </div>
        </div>
    </div>
</div>
<!--<div class="row flex-nowrap">-->
<!--    <div class="col-auto">-->
<!--        <div class="sidebar">-->
<!--            <a href="account-orders.php" class="btn btn-secondary btn-lg btn-block active">Orders</a>-->
<!--            <a href="account-details.php" class="btn btn-secondary btn-lg btn-block">Account details</a>-->
<!--            <a href="#" class="btn btn-secondary btn-lg btn-block">Logout</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-auto flex-fill">-->
<!--        <h2 class="h3 pb-3">Account Details</h2>-->
<!---->
<!--        <table class="table table-striped">-->
<!--            <tr>-->
<!--                <th>#</th>-->
<!--                <th>Продукт</th>-->
<!--                <th>Цена</th>-->
<!--                <th class="text-center">Количество</th>-->
<!--                <th>Сумма</th>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>1</td>-->
<!--                <td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>-->
<!--                <td class="price">1000 РУБ</td>-->
<!--                <td class="text-center">10</td>-->
<!--                <td class="price">1000 РУБ</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>1</td>-->
<!--                <td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>-->
<!--                <td class="price">1000 РУБ</td>-->
<!--                <td class="text-center">10</td>-->
<!--                <td class="price">1000 РУБ</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>1</td>-->
<!--                <td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>-->
<!--                <td class="price">1000 РУБ</td>-->
<!--                <td class="text-center">10</td>-->
<!--                <td class="price">1000 РУБ</td>-->
<!--            </tr>-->
<!--        </table>-->
<!---->
<!--    </div>-->
<!--</div>-->



