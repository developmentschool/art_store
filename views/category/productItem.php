<?php
/* @var $model \app\models\tables\Product */
?>

<div class="card mb-4">
    <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $model['id']]) ?>">
        <img src="<?= $model['mainPictureUrl'] ?>" alt="#">
    </a>
    <div class="card-body">
        <h5 class="card-title"><?= $model['title'] ?></h5>
        <p class="card-text"><?= $model['description'] ?></p>
        <div class="d-flex justify-content-between align-items-center">
            <span class="card-price"><?= $model['price'] ?> руб</span>
<<<<<<< HEAD
            <a class="btn btn-primary cart-button" data-id="<?= $model['id'] ?>" href="" role="button">В корзину</a>
=======
            <a class="btn btn-primary" href="#" role="button">В корзину</a>
>>>>>>> master
        </div>
    </div>
</div>
