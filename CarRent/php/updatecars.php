<?php
//create your database and table then connect 
include("config.php");
 
$model = $mysqli->real_escape_string($_POST['model']);
$number = $mysqli->real_escape_string($_POST['number']);
$seat = $mysqli->real_escape_string($_POST['seat']);
$rent = $mysqli->real_escape_string($_POST['rent']);
$id = $mysqli->real_escape_string($_POST['id']);


$sql = "UPDATE `cars` SET `model`='".$model."',`number`='".$number."',`seat`='".$seat."',`rent`='".$rent."' WHERE id = '".$id."'";
if($mysqli->query($sql) === true){
	echo "101"; 
}
else{
	echo '102';
}
	
// Close connection
$mysqli->close();
 
 
?>