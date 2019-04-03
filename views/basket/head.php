<?php

/* @var $this yii\web\View */

use yii\web\View;

?>
<div class="order-steps my-4 pt-4 pb-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href="<?=$mark['urls']['index']?>" class="order-steps-item <?=$mark['active']['index']?>">
                    <h2 class="num">01</h2>
                    <div>
                        <h4 class="text-uppercase">Shopping Cart</h4>
                        <p>Manage your items list.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?=$mark['urls']['checkout']?>" class="order-steps-item <?=$mark['active']['checkout']?>">
                    <h2 class="num">02</h2>
                    <div>
                        <h4 class="text-uppercase">Checkout details</h4>
                        <p>Checkout your items list</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?=$mark['urls']['pay']?>" class="order-steps-item <?=$mark['active']['pay']?>">
                    <h2 class="num">03</h2>
                    <div>
                        <h4 class="text-uppercase">Order Complete</h4>
                        <p>Review and submit your order</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>