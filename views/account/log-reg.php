<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free-5.7.2-web/css/all.css">
	<link rel="stylesheet" href="css/style.css">
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
			<div class="row">
				<div class="col-md-6">
					<form class="account-form">
						<h2 class="h3 pb-3">Login</h2>
					  <div class="form-group">
					    <label class="label" for="exampleInputEmail1">Email address <span class="text-danger">*</span></label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					  </div>
					  <div class="form-group">
					    <label class="label" for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group">
					  	<button type="submit" class="btn btn-primary">Login</button>
					  </div>
					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Remember me</label>
					  </div>
					  <div class="form-group">
					  	<a href="#" class="btn btn-link" style="padding: 0;">Lost your password?</a>
					  </div>
					</form>
				</div>
				<div class="col-md-6">
					<form class="account-form">
						<h2 class="h3 pb-3">Register</h2>
					  <div class="form-group">
					    <label class="label" for="exampleInputEmail2">Email address <span class="text-danger">*</span></label>
					    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
					  </div>
					  <div class="form-group">
					    <label class="label" for="exampleInputPassword2">Password <span class="text-danger">*</span></label>
					    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label class="label" for="exampleInputPassword3">Password Repeat <span class="text-danger">*</span></label>
					    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password Repeat">
					  </div>
					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck2">
					    <label class="form-check-label" for="exampleCheck2">I have read and agree to the website terms and conditions <span class="text-danger">*</span></label>
					  </div>
					  <button type="submit" class="btn btn-primary">Register</button>
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