<?php

$servername = "localhost";
$username = "dev1";
$password = "megan123";
$dbname = "sensor_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){

	die("Connection Error " . $conn->connect_error);

}

?>
