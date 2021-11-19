<?php
//create your database and table then connect 
include("config.php");
 
$id = $mysqli->real_escape_string($_POST['id']);
$user_id = $mysqli->real_escape_string($_POST['user_id']);
$days = $mysqli->real_escape_string($_POST['days']);
$startdate = $mysqli->real_escape_string($_POST['startdate']);

$sql11 = "SELECT * FROM rentcars WHERE status = '1' AND car_id = '".$id."'";
	$run = mysqli_query($mysqli, $sql11);
	$chk = mysqli_num_rows($run);
	if($chk>0)
	{
		echo '100';
	}
	else
	{
		$sql = "insert into rentcars(user_id, car_id, days, startdate) values('$user_id', '$id', '$days', '$startdate')";
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