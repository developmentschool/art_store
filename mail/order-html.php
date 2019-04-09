<?php
/* @var $this yii\web\View */

use yii\web\View;

?>
<ul class="list-group list-group-flush">
    <li class="list-group-item">Номер заказа: <strong><?= $order['orderId']?></strong></li>
    <li class="list-group-item">Дата: <strong><?= date('d-m-Y')?></strong></li>
    <li class="list-group-item">Номер телефона для связи: <strong><?= $order['phone']?></strong></li>
    <li class="list-group-item">Адрес доставки: <strong><?= $order['address']?></strong></li>
    <li class="list-group-item">Сумма к оплате: <strong class="price"><?= $order['totalSum']?> РУБ</strong></li>
    <li class="list-group-item">Способ оплаты: <strong><?= $order['payment']?></strong></li>
</ul>