<?php
//create your database and table then connect 
include("config.php");
 
$model = $mysqli->real_escape_string($_POST['model']);
$number = $mysqli->real_escape_string($_POST['number']);
$seat = $mysqli->real_escape_string($_POST['seat']);
$rent = $mysqli->real_escape_string($_POST['rent']);


$sql11 = "SELECT number FROM cars WHERE status = 1 AND number = '".$number."'";
	$run = mysqli_query($mysqli, $sql11);
	$chk = mysqli_num_rows($run);
	if($chk>0)
	{
		echo '100';
	}
	else
	{
		$sql = "insert into cars(model, number, seat, rent) values('$model', '$number', '$seat', '$rent')";
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