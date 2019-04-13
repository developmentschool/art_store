<?php

/* @var $this yii\web\View */


?>
<?php echo $this->render('carusel') ?>


<div class="section-elements">
    <div class="row">
        <?php
        echo $this->render('categoryBlock', ['cats' => \app\services\CategoryService::getRandomCategory(7)]);
        ?>
    </div>
</div><!-- .section-elements end -->

<div class="section-elements">
    <h5 class="heading-title">
        <hr>
        <span>Самые новые</span>
    </h5>
    <div class="row">
        <?php
        echo $this->render('productsBlock', ['products' => \app\services\ProductService::getNewProducts(5)]);
        ?>


    </div>
</div><!-- .section-elements end -->

<div class="section-elements">
    <h5 class="heading-title">
        <hr>
        <span>Последние поступления</span>
    </h5>
    <div class="row">
        <?php
        echo $this->render('productsBlock',
            ['products' => \app\services\ProductService::getNewsOtherProducts(5)])
        ?>
    </div><!-- .section-elements end -->

    <div class="section-elements">
        <div class="row justify-content-center align-items-center">
            <div class="col-auto mb-4">
                <a href="#" class="brand">
                    <img src="http://placehold.it/64x64/FFA500/ffffff/&text=Brand" alt="#">
                </a>
            </div>
            <div class="col-auto mb-4">
                <a href="#" class="brand">
                    <img src="http://placehold.it/180x64/FFA500/ffffff/&text=Brand" alt="#">
                </a>
            </div>
            <div class="col-auto mb-4">
                <a href="#" class="brand">
                    <img src="http://placehold.it/180x100/FFA500/ffffff/&text=Brand" alt="#">
                </a>
            </div>
            <div class="col-auto mb-4">
                <a href="#" class="brand">
                    <img src="http://placehold.it/120x120/FFA500/ffffff/&text=Brand" alt="#">
                </a>
            </div>
            <div class="col-auto mb-4">
                <a href="#" class="brand">
                    <img src="http://placehold.it/90x70/FFA500/ffffff/&text=Brand" alt="#">
                </a>
            </div>
        </div>
    </div><!-- .section-elements end -->

</div>


