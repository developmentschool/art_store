<?php
/* @var $order \app\modules\admin\models\Orders */

use app\modules\admin\models\Orders;
use yii\helpers\Html;

?>

<div class="verify-email">
    <p>Здравствуйте, <?= Html::encode(
            $order->user->userProfile
                ? $order->user->userProfile->getFullUserName()
                : $order->user->username
        ) ?></p>

    <p>
        Изменился статус вашего заказа № <?= $order->id ?> от <?= $order->created_at ?> на
        <strong><?= Yii::t('admin.orders', Orders::getStatuses()[$order->status]) ?></strong>
    </p>

    <p><?= Html::a(Html::encode('Мои заказы'), Yii::$app->urlManager->createAbsoluteUrl(['/personal/orders'])) ?></p>
</div>
