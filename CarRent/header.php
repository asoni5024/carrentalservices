<!-- Header section -->
	<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 
	
	  include("./php/config.php");
	  
	  

      $q = "SELECT count(id) as value FROM `rentcars` WHERE user_id='".$user."'";
	  $r = mysqli_query($mysqli, $q);
	  $v = mysqli_fetch_array($r);

      $baseurl = "http://localhost/CarRent/";
    ?>
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="index.php" class="site-logo">
							<img src="img/logo.png" alt="Anvi Gifts Arcade" style="width: 200px;height: auto;">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on divisima ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<?php
								if($name != ""){
							?>
							<div class="up-item">
								<i class="flaticon-profile"></i>
								
								<a href="<?php echo $baseurl; ?>"><?php echo $name;?></a>
								
							</div>

							<div class="up-item" id="second-child">
								<i class="flaticon-logout"></i>
								
								<a href="<?php echo $baseurl; ?>php/logout.php">Logout</a>
								
							</div>
							<?php }else{ ?>
							<div class="up-item">
								<i class="flaticon-profile"></i>
								
								<a href="<?php echo $baseurl; ?>signup.php">Sign In or Create Account</a>
								
							</div>
							<?php } ?>
							<div class="up-item">
							<?php
								if($type != "2"){
							?>	
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span><?php echo $v["value"];?></span>
								</div>
								<a href="<?php echo $baseurl; ?>cart.php">Rent Cars</a>
							<?php }else{ ?>
							<a href="<?php echo $baseurl; ?>rented.php">Rented Cars</a> |
							<a href="<?php echo $baseurl; ?>addcars.php">Add Cars</a>
							<?php } ?>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->