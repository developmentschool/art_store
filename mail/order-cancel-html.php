<?php

use yii\helpers\Html; ?>
<p>Заказ № <?= Html::encode($orderInfo['orderId']) ?> был отменен
    пользователем <?= Html::encode(date('d-m-Y h:i:s')) ?></p>
<?= \yii\bootstrap4\Html::a('Админиситировать заказы', [Yii::$app->urlManager->createAbsoluteUrl(['/admin'])]); ?>
