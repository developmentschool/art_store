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
						<a href="shopping-cart.php" class="order-steps-item">
							<h2 class="num">01</h2>
							<div>
								<h4 class="text-uppercase">Shopping Cart</h4>
								<p>Manage your items list.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#" class="order-steps-item active">
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
			<form action="#">
				<div class="row">
					<div class="col-md-6 pt-3" style="border: 5px solid transparent;">
						<h2 class="h3 pb-3">Billing Details</h2>
					  <div class="form-group">
					    <label class="label" for="inputGroupSelect01">Country <span class="text-danger">*</span></label>
						  <select class="custom-select" id="inputGroupSelect01">
						    <option selected>Choose...</option>
						    <option value="1">One</option>
						    <option value="2">Two</option>
						    <option value="3">Three</option>
						  </select>
					  </div>
						<div class="row">
							<div class="col">
								<div class="form-group">
							    <label class="label" for="exampleInputFirstName1">First Name <span class="text-danger">*</span></label>
							    <input type="text" class="form-control" id="exampleInputFirstName1">
							  </div>
							</div>
							<div class="col">
								<div class="form-group">
							    <label class="label" for="exampleInputLastName1">Last Name <span class="text-danger">*</span></label>
							    <input type="text" class="form-control" id="exampleInputLastName1">
							  </div>
							</div>
						</div>
					 	<div class="form-group">
					    <label class="label" for="exampleInputCompany1">Company Name</label>
					    <input type="text" class="form-control" id="exampleInputCompany1" placeholder="Password">
					  </div>
					 	<div class="form-group">
					    <label class="label" for="exampleInputAddress1">Street address <span class="text-danger">*</span></label>
					    <input type="text" class="form-control" id="exampleInputAddress1" placeholder="House number and street name">
					  </div>
					 	<div class="form-group">
					    <label class="label" for="exampleInputCity1">City <span class="text-danger">*</span></label>
					    <input type="text" class="form-control" id="exampleInputCity1" placeholder="City">
					  </div>
						<div class="row">
							<div class="col">
								<div class="form-group">
							    <label class="label" for="exampleInputPhone1">Phone Numer <span class="text-danger">*</span></label>
							    <input type="text" class="form-control" id="exampleInputPhone1">
							  </div>
							</div>
							<div class="col">
								<div class="form-group">
							    <label class="label" for="exampleInputEmail1">Email Address</label>
							    <input type="email" class="form-control" id="exampleInputEmail1">
							  </div>
							</div>
						</div>
					 	<div class="form-group">
					    <label class="label" for="exampleInputText1">Order notes (optional)</label>
					    <textarea class="form-control" id="exampleInputText1" placeholder="Special notes for delivery"></textarea>
					  </div>
					</div>
					<div class="col-md-6">
						<div class="p-3" style="border: 5px solid #eeeeee;">
							<h2 class="h3 pb-3">Your Order</h2>
							<table class="table table-bordered checkout-table">
								<tr>
									<th>Товар</th>
									<th>Количество</th>
									<th>Сумма</th>
								</tr>
								<tr>
									<td>BELFORD MKII 150mm</td>
									<td>2</td>
									<td class="price">2000 РУБ</td>
								</tr>
								<tr>
									<td>BELFORD MKII 150mm</td>
									<td>3</td>
									<td class="price">3000 РУБ</td>
								</tr>
								<tr>
									<td>ZELDA M113 IN IDF SERVICE - PART3 APC & TOGA</td>
									<td>1</td>
									<td class="price">1000 РУБ</td>
								</tr>
								<tr>
									<td>Общая сумма</td>
									<td>&nbsp;</td>
									<td class="price">6000 РУБ</td>
								</tr>
							</table>
				 			<div class="form-group form-check">
			          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
			          <label class="form-check-label" for="gridRadios1">
			            Credit Card
			          </label>
				      </div>
				      <div class="form-group form-check">
			          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			          <label class="form-check-label" for="gridRadios2">
			            PayPal
			          </label>
				      </div>
				     	<div class="form-group form-check">
					    	<input type="checkbox" class="form-check-input" id="exampleCheck2">
					    	<label class="form-check-label" for="exampleCheck2">I have read and agree to the website terms and conditions <span class="text-danger">*</span></label>
					  	</div>
				      <button type="submit" class="btn btn-primary">Place Order</button>
						</div>
					</div>
				</div>
			</form>
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