<?php

use yii\helpers\Html;
?>
Добрый день, <?= Html::encode($order['isername']) ?>!

   Информация о заказе
   -----------------------------------------------------------------------------
    Номер заказа: <?= Html::encode($order['orderId']) ?>
    Дата: <?= Html::encode(date('d-m-Y')) ?>
    Для уточнения с Вами свяжуться по номеру <?= Html::encode($order['phone']) ?>
    Адрес доставки: <?= Html::encode($order['address']) ?>
    Сумма к оплате: <?= Html::encode($order['totalSum']) ?> РУБ
    Способ оплаты: <?= Html::encode($order['payment']) ?>

