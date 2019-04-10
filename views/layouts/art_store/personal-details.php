<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free-5.7.2-web/css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/sidebar.css">
	<link rel="stylesheet" href="css/product.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/account.css">
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
	
		<div class="container-fluid py-5">

			<div class="row flex-nowrap">
				<div class="col-auto">
					<div class="sidebar">
						<a href="account-orders.php" class="btn btn-secondary btn-lg btn-block active">Orders</a>
						<a href="account-details.php" class="btn btn-secondary btn-lg btn-block">Account details</a>
						<a href="#" class="btn btn-secondary btn-lg btn-block">Logout</a>
				  </div>
				</div>
				<div class="col-auto flex-fill">
					<h2 class="h3 pb-3">Account Details</h2>
					<form action="#">
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
					    <label class="label" for="exampleInputEmail1">Email Address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1">
					  </div>
					  <fieldset>
					  	<legend>Password change</legend>
				  		<div class="form-group">
						    <label class="label" for="exampleInputPassword1">Current password (leave blank to leave unchanged)</label>
						    <input type="text" class="form-control" id="exampleInputPassword1">
						  </div>
				  		<div class="form-group">
						    <label class="label" for="exampleInputPassword2">New password (leave blank to leave unchanged)</label>
						    <input type="text" class="form-control" id="exampleInputPassword2">
						  </div>
				  		<div class="form-group">
						    <label class="label" for="exampleInputLastName3">Confirm new password</label>
						    <input type="text" class="form-control" id="exampleInputLastName3">
						  </div>
					  </fieldset>
					  <button type="submit" class="btn btn-primary">Submit</button>
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