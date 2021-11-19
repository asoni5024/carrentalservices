<?php
//create your database and table then connect 
include("config.php");
 
$name = $mysqli->real_escape_string($_POST['name']);
$email = $mysqli->real_escape_string($_POST['email']);
$mobile = $mysqli->real_escape_string($_POST['number']);
$type = $mysqli->real_escape_string($_POST['type']);
$password = md5($mysqli->real_escape_string($_POST['password']));

$sql11 = "SELECT email, mobile FROM users WHERE status = 1 AND email = '".$email."' AND mobile = '".$mobile."'";
	$run = mysqli_query($mysqli, $sql11);
	$chk = mysqli_num_rows($run);
	if($chk>0)
	{
		echo '100';
	}
	else
	{
		$sql = "insert into users(name, email, mobile, password,type) values('$name', '$email', '$mobile', '$password', '$type')";
		if($mysqli->query($sql) === true){
		   echo "101"; 
		}
		else{
			echo '102';
		}
	}
// Close connection
$mysqli->close();
 
 
?>