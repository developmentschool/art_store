<?php
/* @var $this yii\web\View */

use yii\widgets\LinkPager;

?>
<div class="row">

    <?php foreach ($products as $product): ?>

        <div class="col-sm-6 col-lg-3">
            <div class="card mb-4">
                <a href="product/view/<?= $product['id'] ?>">
                    <img src="<?= $pictures[$product['id']]?>" alt="#">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><?= $product['title'] ?></h5>
                    <p class="card-text"><?= $product['description'] ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="card-price"><?= $product['price'] ?> руб</span>
                        <a class="btn btn-primary" href="#" role="button">В корзину</a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach ?>
    <?php

    echo LinkPager::widget([
        'pagination' => $pages,
    ]) ?>
</div>


