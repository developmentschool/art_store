<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free-5.7.2-web/css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/product.css">
	<link rel="stylesheet" href="css/order.css">
	<title>Верстка art_store</title>
</head>
<body>
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
                  <li><a class="dropdown-item dropdown-toggle" href="#">Catalog</a>
                  	<ul class="dropdown-menu">
		                  <li><a class="dropdown-item" href="#">Home</a></li>
		                  <li><a class="dropdown-item" href="#">Catalog</a></li>
		                  <li><a class="dropdown-item dropdown-toggle" href="#">About</a>
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

		<div class="order-steps my-4 pt-4 pb-2">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<a href="#" class="order-steps-item active">
							<h2 class="num">01</h2>
							<div>
								<h4 class="text-uppercase">Shopping Cart</h4>
								<p>Manage your items list.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="checkout.php" class="order-steps-item">
							<h2 class="num">02</h2>
							<div>
								<h4 class="text-uppercase">Checkout details</h4>
								<p>Checkout your items list</p>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="order-pay.php" class="order-steps-item">
							<h2 class="num">03</h2>
							<div>
								<h4 class="text-uppercase">Order Complete</h4>
								<p>Review and submit your order</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	
		<div class="container-fluid my-5">
			<table class="table table-bordered order-table">
				<tr>
					<th>#</th>
					<th colspan="2">Продукт</th>
					<th>Цена</th>
					<th>Количество</th>
					<th>Сумма</th>
					<th>X</th>
				</tr>
				<tr>
					<td>1</td>
					<td><img src="http://placehold.it/100x100/33bee5/ffffff/&text=Slide 1" alt="#"></td>
					<td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>
					<td>1000 РУБ</td>
					<td>
						<div class="input-quantity _js_quantity">
				  		<button class="btn btn-outline-secondary _js_minus" type="button">-</button>
				    	<input type="text" class="form-control _js_input" value="1">
				    	<button class="btn btn-outline-secondary _js_plus" type="button">+</button>
				  	</div>
					</td>
					<td>1000 РУБ</td>
					<td><span class="delete-order">X</span></td>
				</tr>
				<tr>
					<td>2</td>
					<td><img src="http://placehold.it/100x100/33bee5/ffffff/&text=Slide 1" alt="#"></td>
					<td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>
					<td>1000 РУБ</td>
					<td>
						<div class="input-quantity _js_quantity">
				  		<button class="btn btn-outline-secondary _js_minus" type="button">-</button>
				    	<input type="text" class="form-control _js_input" value="1">
				    	<button class="btn btn-outline-secondary _js_plus" type="button">+</button>
				  	</div>
					</td>
					<td>1000 РУБ</td>
					<td><span class="delete-order">X</span></td>
				</tr>
				<tr>
					<td>3</td>
					<td><img src="http://placehold.it/100x100/33bee5/ffffff/&text=Slide 1" alt="#"></td>
					<td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>
					<td>1000 РУБ</td>
					<td>
						<div class="input-quantity _js_quantity">
				  		<button class="btn btn-outline-secondary _js_minus" type="button">-</button>
				    	<input type="text" class="form-control _js_input" value="1">
				    	<button class="btn btn-outline-secondary _js_plus" type="button">+</button>
				  	</div>
					</td>
					<td>1000 РУБ</td>
					<td><span class="delete-order">X</span></td>
				</tr>
			</table>

			<div class="row mt-5">
				<div class="col-md-6">
					<form action="#">
						<h2 class="h3 pb-3">Coupon</h2>
					  <div class="form-group">
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter coupon">
					  </div>
					  <button type="submit" class="btn btn-primary">Apply coupon</button>
					</form>
				</div>
				<div class="col-md-6">
					<form action="#">
						<h2 class="h3 pb-3">Cart total</h2>
					 	<table class="table table-bordered total-table">
					 		<tr>
					 			<td class="font-weight-bold">Subtotal</td>
					 			<td class="text-center">3000 РУБ</td>
					 		</tr>
					 		<tr>
					 			<td class="font-weight-bold">Shipping</td>
					 			<td class="text-center"></td>
					 		</tr>
					 		<tr>
					 			<td class="font-weight-bold">Total</td>
					 			<td class="text-center">3000 РУБ</td>
					 		</tr>
					 	</table>
					 	<button class="btn btn-primary">Update cart</button>
					 	<button class="btn btn-primary">Proceed to checkout</button>
					</form>
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

  <script src="vendor/jquery-3.3.1.min.js"></script>
  <script src="vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>