<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

?>
<p>
    Для оформления заказа Вам необходимо
    <a class="btn btn-outline-success" href="<?= Url::toRoute('/site/signup') ?>" role="button">зарегистрироваться</a>
    или
    <a class="btn btn-outline-success" href="<?= Url::toRoute('/site/login') ?>" role="button">войти в ситему</a>
</p>
