<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Pjax;

?>
<?php Pjax::begin([
    'linkSelector' => '.order-steps-item',
]) ?>
<?php
echo $this->render('head', ['mark' => $mark]);
?>

    <div class="container-fluid my-5">
        <form action="#" style="display: inline-block;">
            <div class="form-group">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Номер заказа: <strong><?= $order['orderId']?></strong></li>
                    <li class="list-group-item">Дата: <strong><?= date('dd-mm-YY')?></strong></li>
                    <li class="list-group-item">Номер телефона для связи: <strong><?= $order['phone']?></strong></li>
                    <li class="list-group-item">Адрес доставки: <strong><?= $order['address']?></strong></li>
                    <li class="list-group-item">Сумма к оплате: <strong class="price"><?= $order['totalSum']?> РУБ</strong></li>
                    <li class="list-group-item">Способ оплаты: <strong><?= $order['payment']?></strong></li>
                </ul>
            </div>
            <div class="form-group">
                Спасибо за Ваш заказ!!!.
            </div>
            <div class="form-group">
                <a class="btn btn-primary" href="<?= Url::toRoute('/product') ?>" role="button">Вернуться на сайт</a>
            </div>
        </form>
    </div>
<?php Pjax::end() ?>