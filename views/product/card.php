<?php

/* @var $this yii\web\View */

?>
<div class="row flex-nowrap">
    <?php echo $this->render('sideBar') ?>
    <div class="col-auto flex-fill">
        <div class="row">
            <div class="col-6">
                <div class="product-img">
                    <img src="http://placehold.it/640x640/ffc107/ffffff/&text=Image" alt="Изображение">
                </div>
            </div>
            <div class="col-6">
                <div class="product-info-item">
                    <p class="h6 mb-3">SKU: <?= $model->id ?></p>
                    <p class="h6 mb-3"><?= $model->description ?></p>
                    <h1 class="h2 mb-3"><?= $model->title ?></h1>
                </div>
                <hr>
                <div class="product-info-item">
                    <div class="input-group justify-content-between">
                        <div class="input-group-prepend align-items-center">
                            <span class="mr-3">Quantity:</span>
                            <div class="input-quantity _js_quantity">
                                <button class="btn btn-outline-secondary _js_minus" type="button">-</button>
                                <input type="text" class="form-control _js_input" value="1">
                                <button class="btn btn-outline-secondary _js_plus" type="button">+</button>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary">Add to cart</button>
                    </div>
                </div>
                <hr>
                <div class="product-info-item">
                    <div class="product-price"><?= $model->price ?> РУБ</div>

                    <a href="#" class="card-link mt-4">
                        <i class="far fa-heart"></i>
                        <span>Add to cart</span>
                    </a>
                </div>
                <hr>
                <div class="product-info-item">
                    <div>
                        <span class="mr-3">Share it:</span>
                        <a href="#" class="social-item-border-round mr-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-item-border-round mr-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-item-border-round mr-3"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-item-border-round mr-3"><i class="fas fa-envelope"></i></a>
                        <a href="#" class="social-item-border-round mr-3"><i class="fab fa-instagram"></i></a>
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
                echo $this->render('productItem', [
                    'products' => \app\services\ProductService::getProductsByCategory($model->category_id, 4),
                ])
                ?>

            </div>
        </div>
    </div>
</div>

