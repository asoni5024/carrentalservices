<?php
session_start();
$user = $_SESSION['id'];
$name = $_SESSION['name'];
$type = $_SESSION['type'];
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
		$query = "SELECT * FROM `cars` order by id desc";


		$result = mysqli_query($mysqli, $query); 
	?>


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Add cars</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Add cars</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				
					
						<div class="form-group col-lg-6">
							<label class="font-weight-bold text-dark text-2">Model</label>
							<input type="text" id="model"  class="form-control form-control-lg" required>
						</div>
													
						<div class="form-group col-lg-6">
							<label class="font-weight-bold text-dark text-2">Vehicle Number</label>
							<input type="text" id="number"  class="form-control form-control-lg" required>
						</div>
					
					<div class="form-group col-lg-6">
						<label class="font-weight-bold text-dark text-2">No. of Seats</label>
							<input type="text" id="seat"  class="form-control form-control-lg" required>
						</div>
						<div class="form-group col-lg-6">
							<label class="font-weight-bold text-dark text-2">Rent/ Day</label>
							<input type="text" id="rent"  class="form-control form-control-lg" required>
						</div>
					
						
						<div class="form-group col-lg-12">
							<input type="submit" value="Add" class="btn btn-primary btn-modern" data-loading-text="Loading..." onclick="addcars()">
						</div>
					
				
				<?php 
				if(mysqli_num_rows($result) > 0)  
				{ 
				?>
				<div class="col-lg-12">
					<div class="cart-table">
						<h3>All Cars</h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th>Model</th>
									<th>Number</th>
									<th>No. of seats</th>
									<th>Price/ Day</th>
									<th>Update</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
									<?php
									$c = 1;
				                    while($row = mysqli_fetch_array($result))  
				                    {
				                ?>
				                <div>
								<tr>

									<td>
										
									<input type="text" name="model" id="model1_<?php echo $c; ?>" value="<?php echo $row["model"];?>">
										
									</td>
									<td>
										
										<input type="text" name="number" id="number1_<?php echo $c; ?>" value="<?php echo $row["number"];?>">
											
									</td>
									<td><input type="text" name="seat" id="seat1_<?php echo $c; ?>" value="<?php echo $row["seat"];?>"></td>
									<td><i class="fa fa-inr" aria-hidden="true"></i> <input type="text" name="rent1" id="rent1_<?php echo $c; ?>" value="<?php echo $row["rent"];?>"></td>
									<td><button class="btn btn-primary" onclick="updatecars('<?php echo $row["id"];?>','<?php echo $c; ?>')">Update</button></td>
									<td><button class="btn btn-danger" onclick="deletecars('<?php echo $row["id"];?>')">Delete</button></h4></td>
								</tr>
								</div>
								<?php 
								$c++; 
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
