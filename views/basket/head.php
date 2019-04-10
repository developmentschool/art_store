<?php

/* @var $this yii\web\View */

use yii\web\View;

?>
<div class="order-steps my-4 pt-4 pb-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href="" class="order-steps-item <?=$mark['active']['index']?>">
                    <h2 class="num">01</h2>
                    <div>
                        <h4 class="text-uppercase">Корзина</h4>
                        <p>Проверь список покупки</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="order-steps-item <?=$mark['active']['checkout']?>">
                    <h2 class="num">02</h2>
                    <div>
                        <h4 class="text-uppercase">Оформление</h4>
                        <p>Проверьте и оформите покупку</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="order-steps-item <?=$mark['active']['pay']?>">
                    <h2 class="num">03</h2>
                    <div>
                        <h4 class="text-uppercase">Подтверждение</h4>
                        <p>Подтвердите покупку</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>