<?php
/* @var $this yii\web\View */

use yii\web\View;
use yii\helpers\Html;

?>
<div>Добрый день, <?= Html::encode($order['isername']) ?>!</div>
<div class="order-detail">
    <h4>Информация о заказе</h4>
    <hr>
    <p>Номер заказа: <strong><?= Html::encode($order['orderId']) ?></strong></p>
    <p>Дата: <strong><?= Html::encode(date('d-m-Y')) ?></strong></p>
    <p>Для уточнения с Вами свяжуться по номеру
        <strong><?= Html::encode($order['phone']) ?></strong></p>
    <p>Адрес доставки: <strong><?= Html::encode($order['city'].', '.$order['address']) ?></strong></p>
    <p>Сумма к оплате: <strong class="price"><?= Html::encode($order['totalSum']) ?>
            РУБ</strong></p>
    <p>Способ оплаты: <strong><?= Html::encode($order['payment']) ?></strong></p>
    <a href="<?= Yii::$app->request->origin?>">Перейти на сайт</a>
</div>