<?php

$servername = "localhost";
$username = "dev1";
$password = "megan123";
$dbname = "sensor_data";

$devid = $_POST["device_id"];
$temp = $_POST["temp_data"];
$hum = $_POST["hum_data"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("Connection failed " . $conn->connect_error);
}
else {
	$sql = "insert into temparature_sensor values($devid, NOW(), $temp, $hum)";
	if($conn->query($sql) === TRUE){
		echo "DONE";
	}
	else{
		echo "Error" . $conn->error;
	}
     }

$conn->close();
?>	

