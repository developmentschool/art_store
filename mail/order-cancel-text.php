<?php

use yii\helpers\Html;
use Yii;
?>



    Заказ №<?= Html::encode($orderInfo['orderId']) ?> был отменен  <?= Html::encode(date('d-m-Y h:i:s')) ?>
    Администрировать заказы <?= Yii::$app->urlManager->createAbsoluteUrl(['/admin'])?>