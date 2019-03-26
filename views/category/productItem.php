<?php
/* @var $model \app\models\tables\Product */
?>

    <div class="card mb-4">
        <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $model['id']]) ?>">
            <img src="http://placehold.it/640x640/33bee5/ffffff/&text=Image" alt="#">
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
