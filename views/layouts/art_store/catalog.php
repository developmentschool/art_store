<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="d-flex flex-column min-vh-100 bg-light">
	<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
    <a class="navbar-brand" href="#">Logo</a>
		<div class="navbar-nav-scroll">
	    <ul class="navbar-nav bd-navbar-nav flex-row">
	      <li class="nav-item">
	        <a class="nav-link" href="#">Главная</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link active" href="#">Каталог</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Контакты</a>
	      </li>
	    </ul>
	  </div>
	</header>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="http://placehold.it/1440x480/33bee5/ffffff/&text=Slide 1" alt="#">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="http://placehold.it/1440x480/ffc107/ffffff/&text=Slide 2" alt="#">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="http://placehold.it/1440x480/6610f2/ffffff/&text=Slide 3" alt="#">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	<div class="catalog py-5">
    <div class="container-fluid">

      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4">
          	<a href="card.html">
		          <img src="http://placehold.it/640x640/33bee5/ffffff/&text=Image" alt="#">
		        </a>
            <div class="card-body">
            	<h5 class="card-title">Название товара</h5>
              <p class="card-text">Краткое описание товара, только самое важное</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="card-price">1000 руб</span>
                <a class="btn btn-primary" href="#" role="button">В корзину</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4">
          	<a href="card.html">
		          <img src="http://placehold.it/640x640/33bee5/ffffff/&text=Image" alt="#">
		        </a>
            <div class="card-body">
            	<h5 class="card-title">Название товара</h5>
              <p class="card-text">Краткое описание товара, только самое важное</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="card-price">1000 руб</span>
                <a class="btn btn-primary" href="#" role="button">В корзину</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4">
          	<a href="card.html">
		          <img src="http://placehold.it/640x640/33bee5/ffffff/&text=Image" alt="#">
		        </a>
            <div class="card-body">
            	<h5 class="card-title">Название товара</h5>
              <p class="card-text">Краткое описание товара, только самое важное</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="card-price">1000 руб</span>
                <a class="btn btn-primary" href="#" role="button">В корзину</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4">
          	<a href="card.html">
		          <img src="http://placehold.it/640x640/33bee5/ffffff/&text=Image" alt="#">
		        </a>
            <div class="card-body">
            	<h5 class="card-title">Название товара</h5>
							<p class="card-text">Краткое описание товара, только самое важное</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="card-price">1000 руб</span>
                <a class="btn btn-primary" href="#" role="button">В корзину</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4">
          	<a href="card.html">
		          <img src="http://placehold.it/640x640/33bee5/ffffff/&text=Image" alt="#">
		        </a>
            <div class="card-body">
            	<h5 class="card-title">Название товара</h5>
              <p class="card-text">Краткое описание товара, только самое важное</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="card-price">1000 руб</span>
                <a class="btn btn-primary" href="#" role="button">В корзину</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .catalog end -->

	<footer class="mt-auto bg-dark">
	  <div class="container-fluid p-5">
	    <span>© art_store</span>
	  </div>
	</footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>