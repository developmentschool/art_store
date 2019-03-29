<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 23.03.2019
 * Time: 23:19
 */
/**
 * @var $model \app\models\tables\Product
 */
?>
<div class="col">
    <div class="card mb-4">
        <a href="product/view/<?= $model['id'] ?>">
            <img src="<?= $model['mainPictureUrl'] ?>" alt="#">
        </a>
        <div class="card-body">
            <h5 class="card-title"><?= $model['title'] ?></h5>
            <p class="card-text"><?= $model['description'] ?></p>
            <div class="d-flex justify-content-between align-items-center">
                <span class="card-price"><?= $model['price'] ?> руб</span>
                <a class="btn btn-primary" href="#" role="button">В корзину</a>
            </div>
        </div>
    </div>
</div>

