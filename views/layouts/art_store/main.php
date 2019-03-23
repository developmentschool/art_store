<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\FontAwesomeAsset;

AppAsset::register($this);
FontAwesomeAsset::register($this);
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

<div class="page">

	<div class="top-bar">
		<div class="container-fluid">
			<div class="row justify-content-between align-items-center">
				<div class="col-auto">
					<form action="#" class="header-search">
						<input type="text" placeholder="Search">
					</form>
				</div>
				<div class="col-auto d-flex">
					<ul class="header-icons"> 
          	<li>&nbsp;</li>
						<li>
							<a href="#" class="count-item">
								<i class="fas fa-tag"></i>
								<div class="count-item__count">0</div>
							</a>
						</li>
						<li>
							<a href="#" class="count-item">
								<i class="fas fa-shopping-cart"></i>
								<div class="count-item__count">12</div>
							</a>
						</li>
						<li>
							<div class="header-account">
								<a href="#" class="link">Login or Register</a>
							</div>
						</li>
          </ul>
				</div>
			</div>
		</div>
	</div>

	<header>
		<div class="container-fluid py-4">
			<div class="row justify-content-between align-items-center">
				<div class="col-auto">
					<a href="#" class="logo"><img src="img/logo.png" alt="Логотип"></a>
				</div>
			</div>
		</div>
		<div class="wide-nav">
			<div class="container-fluid">
				<div class="row justify-content-between align-items-center">
					<div class="col-auto">
						<div class="header-vertical-menu d-flex align-items-center">
						  <nav class="navbar-dark">
						    <span class="navbar-toggler-icon"></span>
						  </nav>
              <ul class="dropdown-menu">
                <a class="dropdown-item" href="#">Home</a>
                <a class="dropdown-item" href="#">Catalog</a>
                <a class="dropdown-item" href="#">About</a>
                <a class="dropdown-item" href="#">Contacts</a>
              </ul>
            </div>
					</div>
					<div class="col-auto">
						<a href="#" class="social-item ml-3"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social-item ml-3"><i class="fab fa-twitter"></i></a>
						<a href="#" class="social-item ml-3"><i class="fab fa-youtube"></i></a>
						<a href="#" class="social-item ml-3"><i class="fas fa-envelope"></i></a>
						<a href="#" class="social-item ml-3"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
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


	<div class="container-fluid py-5">

		<div class="section-elements">
			<div class="row">
				<?php for($i = 0; $i < 7; $i++): ?>
				<div class="col">
					<div class="category text-center">
						<a href="#">
							<img class="category-img" src="http://placehold.it/64x64/FFA500/ffffff/&text=Cat" alt="#">
							<p>Категория</p>
						</a>
					</div>
				</div>
				<?php endfor; ?>
			</div>
		</div><!-- .section-elements end -->

		<div class="section-elements">
			<h5 class="heading-title">
				<hr>
				<span>Top News</span>
			</h5>
			<div class="row">
				<?php for($i = 0; $i < 5; $i++): ?>
				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-20pr">
          <div class="card p-3 mb-4">
          	<h5 class="card-title text-center">Название товара</h5>
          	<a href="card.html" class="card-img mb-3">
		          <img src="http://placehold.it/640x640/33bee5/ffffff/&text=Image" alt="#">
		        </a>
            <div class="d-flex justify-content-between align-items-center">
              <span class="card-price">1000 руб</span>
              <a href="#" class="card-link"><i class="fas fa-eye"></i></a>
            </div>
            <div class="card-summary">
            	<div class="card-summary__inner">
            		<hr>
              	<div class="d-flex justify-content-between align-items-center">
              		<a href="#" class="card-link">
              			<i class="far fa-heart"></i>
              			<span>Wishlist</span>	
              		</a>
              		<a href="#" class="card-link">
              			<i class="fas fa-shopping-basket"></i>
              			<span>Add to cart</span>	
              		</a>
              	</div>
              </div>
            </div>
          </div>
        </div>
        <?php endfor; ?>
			</div>
		</div><!-- .section-elements end -->

		<div class="section-elements">
			<h5 class="heading-title">
				<hr>
				<span>Top News "Other brands"</span>
			</h5>
			<div class="row">
				<?php for($i = 0; $i < 5; $i++): ?>
				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-20pr">
          <div class="card p-3 mb-4">
          	<h5 class="card-title text-center">Название товара</h5>
          	<a href="card.html" class="card-img mb-3">
		          <img src="http://placehold.it/640x640/33bee5/ffffff/&text=Image" alt="#">
		        </a>
            <div class="d-flex justify-content-between align-items-center">
              <span class="card-price">1000 руб</span>
              <a href="#" class="card-link"><i class="fas fa-eye"></i></a>
            </div>
            <div class="card-summary">
            	<div class="card-summary__inner">
            		<hr>
              	<div class="d-flex justify-content-between align-items-center">
              		<a href="#" class="card-link">
              			<i class="far fa-heart"></i>
              			<span>Wishlist</span>	
              		</a>
              		<a href="#" class="card-link">
              			<i class="fas fa-shopping-basket"></i>
              			<span>Add to cart</span>	
              		</a>
              	</div>
              </div>
            </div>
          </div>
        </div>
        <?php endfor; ?>
			</div>
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

	<footer class="mt-auto">
		<div class="footer-top-bar">
			<div class="container-fluid">
				<div class="row justify-content-between align-items-center">
					<div class="col-auto">
						<i class="far fa-envelope"></i>
						<a href="">support@art_store.com</a>
					</div>
					<div class="col-auto">
						<ul class="nav footer-nav">
							<li>&nbsp;</li>
							<li><a href="#">Downloads</a></li>
							<li><a href="#">Delivery Information</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms & Condition</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Order & Return</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-center-bar">
			<div class="container-fluid">
				<div class="row justify-content-between align-items-center">
					<div class="col-auto">
						<a href="#" class="social-item-round mr-3"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social-item-round mr-3"><i class="fab fa-twitter"></i></a>
						<a href="#" class="social-item-round mr-3"><i class="fab fa-youtube"></i></a>
						<a href="#" class="social-item-round mr-3"><i class="fas fa-envelope"></i></a>
						<a href="#" class="social-item-round mr-3"><i class="fab fa-instagram"></i></a>
					</div>
					<div class="col-5">
						<div class="input-group">
						  <input type="text" class="form-control" placeholder="Email">
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary" type="button">Subscribe</button>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom-bar text-center">
			<div class="container-fluid">
				<div class="row justify-content-between align-items-center">
					<div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, doloribus.</div>
					<div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, doloribus.</div>
					<div class="col">8 333 333 55 77<br> 8 333 333 55 77</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>