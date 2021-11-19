<?php
include("config.php");
if(isset($_POST['user_id']) && $_POST['user_password']){
	$data = $_POST['user_id'];
	$pass = $_POST['user_password'];
	$cook = $_POST['cook'];
	$remember = $_POST['rememberme'];
	$sql = "SELECT email, mobile FROM users WHERE status = 1 AND (email = '".$data."' OR mobile = '".$data."')";
	$run = mysqli_query($mysqli, $sql);
	$chk = mysqli_num_rows($run);

	if($chk>0){
		if($cook){
			$md5_password =$pass;
		}else{
			$md5_password = md5($pass);
		}
		
		$sql1 = "SELECT * FROM users WHERE (email = '".$data."' OR mobile = '".$data."') AND password = '".$md5_password."' ";
		$run1 = mysqli_query($mysqli,$sql1);
		$chk1 = mysqli_num_rows($run1);
		if($chk1>0){
			if(!empty($remember))   
	   		{  
		    setcookie ("member_login",$data,time()+ (10 * 365 * 24 * 60 * 60));  
		    setcookie ("member_password",$md5_password,time()+ (10 * 365 * 24 * 60 * 60));
		   
	   		}  
			$row = mysqli_fetch_assoc($run1);

			session_start();
			$_SESSION['id']= $row['id'];
			$_SESSION['name']= $row['name'];
			$_SESSION['email']= $row['email'];
			$_SESSION['mobile']= $row['mobile'];
			$_SESSION['password']= $row['password'];
			$_SESSION['type']= $row['type'];
			echo '101';
			
		}
		else{
			echo '102';
		}
	}
	else{
		echo '103';
	}
}
else{
	echo '104';
}
?>


