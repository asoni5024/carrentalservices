<?php
session_start();
$user = isset($_SESSION['id']) ? $_SESSION['id'] : '';
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$type = isset($_SESSION['type']) ? $_SESSION['type'] : '';
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Car Rental Service</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?php 
		include('header.php'); 
	?>


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Sign In or Create Account</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Sign In or Create Account</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart-table">
						<h3>Sign In or Create Account</h3>
						<div class="row">
						<div class="col">

							<div class="featured-boxes">
								<div class="row">
									<div class="col-md-6 mb-5">
										<div class="featured-box featured-box-primary text-left mt-5">
											<div class="box-content">
												<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">I'm a Returning Customer</h4>
												<div class="needs-validation">
													<div class="form-row">
														<div class="form-group col">
															<label class="font-weight-bold text-dark text-2">Mobile Number or E-mail Address</label>
															<input type="text" id="user_id"  class="form-control form-control-lg" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<!-- <a class="float-right" href="#">(Lost Password?)</a> -->
															<label class="font-weight-bold text-dark text-2">Password</label>
															<input type="password" id="user_password"  class="form-control form-control-lg" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="rememberme" <?php if(isset($_COOKIE["user_id"])) { ?> checked <?php } ?> >
																<label class="custom-control-label text-2" for="rememberme">Remember Me</label>
															</div>
														</div>
														<div class="form-group col-lg-6">
															<input type="submit" value="Login" class="btn btn-primary btn-modern float-right" data-loading-text="Loading..." onclick="user_login()">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 mb-5">
										<div class="featured-box featured-box-primary text-left mt-5">
											<div class="box-content">
												<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Create Account</h4>
												<div class="needs-validation">
													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark text-2">Name</label>
															<input type="text" id="name"  class="form-control form-control-lg" required>
														</div>
													
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark text-2">E-mail Address</label>
															<input type="text" id="email"  class="form-control form-control-lg" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark text-2">Mobile Number</label>
															<input type="text" id="number"  class="form-control form-control-lg" required>
														</div>
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark text-2">Password</label>
															<input type="password" id="password"  class="form-control form-control-lg" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-12">
															<label class="font-weight-bold text-dark text-2">Type</label>
															<select id="type" class="form-control form-control-lg" required>
																<option value="1">Customer</option>
																<option value="2">Agent</option>
															</select>
														</div>
														
													</div>
													<div class="form-row">
														<div class="form-group col-lg-9">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="terms">
																<label class="custom-control-label text-2" for="terms">I have read and agree to the <a href="#">terms of service</a></label>
															</div>
														</div>
														<div class="form-group col-lg-3">
															<input type="submit" value="Create" class="btn btn-primary btn-modern float-right" data-loading-text="Loading..." onclick="create_account()">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	



	<?php include('footer.php'); ?>


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/custom.js"></script>
	<script src="dist/js/pages/jquery.toaster.js"></script>
	</body>
</html>
