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
		// echo $user;
		$query = "SELECT a.*,b.*,c.* FROM `rentcars` a inner join cars b on b.id = a.car_id inner join users c on c.id = a.user_id  order by a.id desc";


		$result = mysqli_query($mysqli, $query); 
	?>


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Rented cars</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Rented cars</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<?php 
				if(mysqli_num_rows($result) > 0)  
				{ 
				?>
				<div class="col-lg-12">
					<div class="cart-table">
						<h3>Rented Cars</h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th>Name</th>
									<th>Mobile</th>
									<th>Model</th>
									<th>Number</th>
									<th>No. of seats</th>
									<th>Price/ Day</th>
									<th>Days for rent</th>
									<th>Start Date</th>
								</tr>
							</thead>
							<tbody>
									<?php

				                    while($row = mysqli_fetch_array($result))  
				                    {
				                ?>

								<tr>
									<td>
										
									<h4><?php echo $row["name"];?></h4>
										
									</td>
									<td>
										
									<h4><?php echo $row["mobile"];?></h4>
										
									</td>
									<td>
										
									<h4><?php echo $row["model"];?></h4>
										
									</td>
									<td>
										
										<h4><?php echo $row["number"];?></h4>
											
									</td>
									<td><h4><?php echo $row["seat"];?></h4></td>
									<td><h4><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row["rent"];?></h4></td>
									<td><h4><?php echo $row["days"];?></h4></td>
									<td><h4><?php echo $row["startdate"];?></h4></td>
								</tr>
								
								<?php  
				                    }  
				                ?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
				
				<?php } else{ ?>
				<div class="col-lg-12">
					<div class="cart-table">
						<h3>No Car for Rented? <a href="login.php">Login</a> to see the cars you added previously</h3>
					</div>
				</div>
				<?php  } ?> 
			</div>
		</div>
	</section>
	



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
