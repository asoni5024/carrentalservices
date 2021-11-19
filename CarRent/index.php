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
		$query = "SELECT * FROM `cars` Where status = 1 ORDER BY id DESC";
		$result = mysqli_query($mysqli, $query);
	?>



	<!-- Hero section -->
	
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST CARS ON RENT</h2>
			</div>
			<div class="row">
			<!-- <div class="product-slider owl-carousel"> -->
				<?php 
                  if(mysqli_num_rows($result) > 0)  
                  {
                  $c = 1;  
                    while($row = mysqli_fetch_array($result))  
                    {  
                ?> 
				<div class="col-md-3 product-item" style="border: 1px solid #ccc;height: 400px;">
					<div class="pi-text">
						<h6><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row["rent"];?>/Day</h6>
						<p>Model - <?php echo $row["model"];?></p>
						<p>Number - <?php echo $row["number"];?></p>
						<p>No. of seats - <?php echo $row["seat"];?></p>
						<div>
							<?php
							if($name != "" && $type != "2"){
							?>
							<label>No. of Days</label>
							<input type="text" name="days" id="days_<?php echo $c; ?>" class="form-control"><br>
							<label>Start Date</label>
							<input type="date" name="date" id="startdate_<?php echo $c; ?>" class="form-control"><br>
							<?php } ?>
							<button class="btn btn-primary" onclick="add_car('<?php echo $row["id"];?>','<?php echo $user;?>','<?php echo $c; ?>')">Rent</button>
						</div>
					</div>
				</div>
				<?php
					$c++;  
                    }
                      
                  }  
                ?>
            </div>
			<!-- </div> -->
		</div>
	</section>
	<!-- letest product section end -->



	

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
