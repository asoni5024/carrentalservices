<?php
//create your database and table then connect 
include("config.php");
 
$id = $mysqli->real_escape_string($_POST['id']);

$sql = "DELETE FROM cars WHERE status = '1' AND id = '".$id."'";
	$run = mysqli_query($mysqli, $sql);
	$chk = mysqli_num_rows($run);
	
	if($mysqli->query($sql) === true){
		echo "100"; 
	}
	else{
		echo '102';
	}
// Close connection
$mysqli->close();
 
 
?>