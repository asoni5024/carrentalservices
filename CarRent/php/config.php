<?php

//create your database and table then connect
$mysqli = new mysqli("localhost", "admin", "Qwert@12345", "carrent");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>


