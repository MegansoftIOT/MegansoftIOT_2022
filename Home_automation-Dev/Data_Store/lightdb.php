<?php

$servername = "localhost";
$username = "dev1";
$password = "megan123";
$dbname = "sensor_data";

$devid = $_POST["device_id"];
$light = $_POST["sensor"];
$stat = $_POST["status"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
        die("Connection failed " . $conn->connect_error);
}
else {
        $sql = "insert into light_sensor values($devid, NOW(), $light, $stat)";
        if($conn->query($sql) === TRUE){
                echo "DONE";
        }
        else{
                echo "Error" . $conn->error;
        }
     }

$conn->close();
?>

