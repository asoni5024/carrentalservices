<?php
session_start();

include("config.php");
	
$user = $_SESSION['id'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
if($email1 == $email2){
	$sql1 = "UPDATE `user_table` SET `email`='$email1' WHERE id = '".$user."'";
	if(mysqli_query($mysqli, $sql1))
	{
		echo '101';
	}
	else
	{
		echo '102';
	}	
}
else{
	echo '100';
}
	
?>


