<?php

/* @var $this yii\web\View */

use app\models\tables\Product;
use yii\widgets\Menu;

?>
<div class="row flex-nowrap">
    <div class="col-auto">
        <div class="sidebar">
            <div class="sidenav-title">Доступные категории</div>
            <?php
            echo Menu::widget([
                'items' => $menu,
                'options' => [
                    'class' => 'nav sidenav',
                ],
            ]);
            ?>
        </div>
    </div>


    <div class="col-auto flex-fill">
        <div class="row">
            <div class="col-6">
                <div class="product-img">
                    <img src="<?= $model->mainPictureUrl ?>" alt="Изображение">
                </div>
            </div>
            <div class="col-6">
                <div class="product-info-item">
                    <p class="h6 mb-3">Код товара: <?= $model->id ?></p>
                    <p class="h6 mb-3"><?= $model->description ?></p>
                    <h1 class="h2 mb-3"><?= $model->title ?></h1>
                </div>
                <hr>
                <div class="product-info-item">
                    <div class="input-group justify-content-between">
                        <div class="input-group-prepend align-items-center">
                            <span class="mr-3">Количество:</span>
                            <div class="input-quantity _js_quantity">
                                <button class="btn btn-outline-secondary _js_minus" type="button">-</button>
                                <input type="text" class="form-control _js_input" id="product-quantity" value="1">
                                <button class="btn btn-outline-secondary _js_plus" type="button">+</button>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary  basket-button" data-id="<?= $model->id ?>">Добавить в корзину</button>
                    </div>
                </div>
                <hr>
                <div class="product-info-item">
                    <div class="product-price"><?= $model->price ?> РУБ</div>

                    <a href="" class="card-link mt-4">
                        <i class="far fa-heart"></i>
                        <span>Хочу</span>
                    </a>
                </div>
                <hr>
                <div class="product-info-item">
                    <div>
                        <span class="mr-3">Поделится:</span>
                        <a href="#" class="social-item-border-round mr-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-item-border-round mr-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-item-border-round mr-3"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-item-border-round mr-3"><i class="fas fa-envelope"></i></a>
                        <a href="#" class="social-item-border-round mr-3"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-5 pt-5">
    <h5 class="heading-title">
        <hr>
        <span>Похожие товары</span>
    </h5>
    <div class="row">
        <?php
        echo $this->render('productView', [
            'productDataProvider' => (new \yii\data\ActiveDataProvider([
                'query' => Product::find()
                    ->where(['category_id' => $model->category_id]),
                'totalCount' => 4,
            ])),
        ])
        ?>

    </div>
</div>
</div>
</div>

