<?php

$data = $_POST["lightstatus"];

$addr = "192.168.0.60";
$port = 12345;

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if($socket === false){

	echo "Failed to create a socket". socket_strerror(socket_last_error());
	header("Location: controls.php?s=2"); 
}

$conn = socket_connect($socket, $addr, $port);
if($conn === false){

	echo "Failed to connect to server" . socket_strerror(socket_last_error($socket));
	header("Location: controls.php?s=2");
}

socket_write($socket, $data, strlen($data));
socket_close($socket);
header("Location: controls.php?s=1");
?>
