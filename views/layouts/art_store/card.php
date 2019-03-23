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
				<div class="col-auto d-flex align-items-center">
					<a href="#" class="logo mr-5"><img src="img/logo.png" alt="Логотип"></a>
					<ul class="nav header-nav">
            <li><a class="nav-link" href="#">Home</a></li>
            <li><a class="nav-link" href="#">Catalog</a></li>
            <li><a class="nav-link" href="#">About</a></li>
            <li><a class="nav-link" href="#">Contacts</a></li>
					</ul>
				</div>
				<div class="col-auto">
					<!-- Пока пусто -->
				</div>
			</div>
		</div>
		<div class="wide-nav">
			<div class="container-fluid">
				<div class="row justify-content-between align-items-center">
					<div class="col-auto">
						<div class="header-vertical-menu d-flex align-items-center _js_dropdown-menu">
						  <div class="navbar-dark">
						    <span class="navbar-toggler-icon"></span>
						  </div>
              <ul class="dropdown-menu header-dropdown-menu">
                <li><a class="dropdown-item" href="#">Home</a></li>
                <li><a class="dropdown-item" href="#">Catalog</a>
                	<ul class="dropdown-menu">
	                  <li><a class="dropdown-item" href="#">Home</a></li>
	                  <li><a class="dropdown-item" href="#">Catalog</a></li>
	                  <li><a class="dropdown-item" href="#">About</a>
	                  	<ul class="dropdown-menu">
			                  <li><a class="dropdown-item" href="#">Home</a></li>
			                  <li><a class="dropdown-item" href="#">Catalog</a></li>
			                  <li><a class="dropdown-item" href="#">About</a></li>
			                  <li><a class="dropdown-item" href="#">Contacts</a></li>
		                	</ul>
	                  </li>
	                  <li><a class="dropdown-item" href="#">Contacts</a></li>
	                </ul>
                </li>
                <li><a class="dropdown-item" href="#">About</a></li>
                <li><a class="dropdown-item" href="#">Contacts</a></li>
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

	<div class="container-fluid py-5">

		<div class="row flex-nowrap">
			<div class="col-auto">
				<div class="sidebar">
					<div class="sidenav-title">AVAILABLE CATEGORIES</div>
    			<ul class="nav sidenav">
			      <li><a href="#">Товары 1</a></li>
			      <li><a href="#">Товары 2</a></li>
			      <li><a href="#">Товары 3</a></li>
			      <li><a href="#">Товары 4</a></li>
			      <li><a href="#">Товары 5</a></li>
			      <li><a href="#">Товары 6</a></li>
			      <li><a href="#">Какое-то очень-очень длинное название</a></li>
			      <li><a href="#">Товары 8</a></li>
			      <li><a href="#">Товары 9</a></li>
			      <li><a href="#">Товары 10</a></li>
			      <li><a href="#">Товары 11</a></li>
			    </ul>
			  </div>
			</div>
			<div class="col-auto flex-fill">
				<div class="row">
					<div class="col-6">
						<div class="product-img">
							<img src="http://placehold.it/640x640/ffc107/ffffff/&text=Image" alt="Изображение">
						</div>
					</div>
					<div class="col-6">
						<div class="product-info-item">
              <p class="h6 mb-3">SKU: YM YM1877</p>
              <p class="h6 mb-3">CATEGORIES: MILITARY, TOP NEWS OTHER BRANDS, YOUNG MINIATURES</p>
              <h1 class="h2 mb-3">Название товара</h1>
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
							<div class="product-price">2000 РУБ</div>

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
						<?php for($i = 0; $i < 4; $i++): ?>
						<div class="col-sm-6 col-md-4 col-lg-3">
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
				</div>
			</div>
		</div>

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