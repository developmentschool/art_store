<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 23.03.2019
 * Time: 12:30
 */
?>
<?php foreach ($products as $product): ?>
    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-20pr">
        <div class="card p-3 mb-4">
            <h5 class="card-title text-center"><?= $product->title ?></h5>
            <a href="product/view/<?= $product->id ?>" class="card-img mb-3">
                <img src="<?= $product->mainPictureUrl ?>" alt="#">
            </a>
            <div class="d-flex justify-content-between align-items-center">
                <span class="card-price"><?= $product->price ?> руб</span>
                <a href="product/view/<?= $product->id ?>" class="card-link"><i class="fas fa-eye"></i></a>
            </div>
            <div class="card-summary">
                <div class="card-summary__inner">
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="card-link">
                            <i class="far fa-heart"></i>

                            <span>Хочу</span>
                        </a>
                        <a href="#" class="card-link cart-button" data-id="<?= $product->id ?>">
                            <i class="fas fa-shopping-basket"></i>
                            <span>В корзину</span>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>