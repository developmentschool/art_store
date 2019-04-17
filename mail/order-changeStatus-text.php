<?php
/* @var $order \app\modules\admin\models\Orders */

use app\modules\admin\models\Orders;
use yii\helpers\Html;

?>

Здравствуйте, <?= Html::encode($order->user->userProfile ? $order->user->userProfile->getFullUserName() : $order->user->username) ?>

Изменился статус вашего заказа № <?= $order->id ?> от <?= $order->created_at ?> на <?= Yii::t(
    'admin.orders',
    Orders::getStatuses()[$order->status]
) ?>
<?= Html::a(Html::encode('Мои заказы'), Yii::$app->urlManager->createAbsoluteUrl(['/personal/orders'])) ?>

