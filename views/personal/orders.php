<?php
/* @var $this \yii\web\View */

use yii\bootstrap4\Html;

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
        <?php foreach ($orders as $order): ?>
            <div class="card card-body">
                <div>
                    <a class="btn btn-secondary btn-block" data-toggle="collapse" href="#collapse<?= $order['id'] ?>"
                       role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                        Заказ № <?= $order['id'] ?> от <?= $order['created_at'] ?> на сумму <?= $order['total'] ?> /
                        статус заказа: <?= $order['status'] ?>
                    </a>
                </div>
                <div class="collapse" id="collapse<?= $order['id'] ?>">
                    <table class="table table-striped">
                        <tr>
                            <th>Артикул</th>
                            <th>Продукт</th>
                            <th>Цена</th>
                            <th class="text-center">Количество</th>
                            <th>Сумма</th>
                        </tr>
                        <?php foreach ($order['products'] as $product): ?>
                            <tr>
                                <td><?= $product['id'] ?></td>
                                <td><?= $product['title'] ?></td>
                                <td class="price"><?= $product['price'] ?> РУБ</td>
                                <td class="text-center"><?= $product['quantity'] ?></td>
                                <td class="price"><?= $product['subtotal'] ?> РУБ</td>
                            </tr>
                        <?php endforeach; ?>


                        <tr>
                            <td>Общая сумма</td>
                            <td>&nbsp;</td>
                            <td class="price"><?= $order['total'] ?> РУБ</td>
                        </tr>
                    </table>

                    <?php if ($order['status'] == 'В работе'): ?>
                        <?= Html::a('Отменить заказ', ["personal/cancel-order/{$order['id']}"],
                            ['class' => 'btn btn-primary  btn-block']) ?>
                    <?php endif; ?>

                </div>
            </div>
        <?php endforeach; ?>
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



