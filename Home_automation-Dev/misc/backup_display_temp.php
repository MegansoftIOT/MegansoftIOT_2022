<?php

$servername = "localhost";
$username = "dev1";
$password = "megan123";
$dbname = "sensor_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
        die("Connection failed " . $conn->connect_error);
}
//echo "at 1";
else{
	echo "<html>
		<head><link rel='stylesheet' href='main.css'></head>
        	<body class='main'>
        	<ul class='main'>
        	<li class='main'><a href='main.php'>Main</a></li>
        	<li class='main'><a href='realtimehtml.html'>Realtime Data</a></li>
        	<li class='main'><a href='controls.php'>Controls</a></li>
        	</ul>
		<p class='main'>
		From <input type='date' name='from'>&nbsp;&nbsp;&nbsp;
		To <input type='date' name='to'><br>
		Device id<input type='text' name='devid' value='your device id here'><br>
		</p>";
	$queri = "select * from temparature_sensor;";
	$data = $conn->query($queri);
	if($data->num_rows > 0){
		echo "<table>";
		echo "<tr>";
		echo "<th>Device ID</th> ";
		echo "<th>Date</th> ";
		echo "<th>Temparature</th> ";
		echo "<th>Humidity</th> ";
		echo "</tr>";
		while($rec = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td style='text-align:center;'>" . $rec["devid"] . "</td> ";
			echo "<td style='text-align:center;'>" . $rec["date"] . "</td> ";
			echo "<td style='text-align:center;'>" . $rec["temp"] . "</td> ";
			echo "<td style='text-align:center;'>" . $rec["humidity"] . "</td> ";
			echo "</tr>";
		}
		echo "</table>";
		echo "</body>";
		echo "</html>";
	}
	else{
		echo "No results";
	}
}

$conn->close();

?>
