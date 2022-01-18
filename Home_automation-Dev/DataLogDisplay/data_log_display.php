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
		<head><link rel='stylesheet' href='../CSS/main.css'></head>
        	<body class='main'>
        	<ul class='main'>
        	<li class='main'><a href='../Home_Page/main.php'>Main</a></li>
        	<li class='main'><a href='../Real_Time_Data/realtimehtml.html'>Realtime Data</a></li>
        	<li class='main'><a href='../Remote_Controls/controls.php'>Controls</a></li>
        	</ul>
		<p class='main'>
			From <input type='date' name='from'>&nbsp;&nbsp;&nbsp;
			To <input type='date' name='to'><br><br>
			Device id
			<select>
				<option name='kitchen' value='103'>Kitchen</option>
				<option name='livingroom' value='104'>Living Room</option>
				<option name='bedroom' value='105'>Bedroom</option>
			</select>
			<br><br><br>
		</p>";
	$queri = "select * from light_sensor;";
	$data = $conn->query($queri);
	if($data->num_rows > 0){
		echo "<table>
			<tr>
				<th>Device ID</th>
				<th>Date</th>
				<th>Light Intensity</th>
				<th>Status</th>
			</tr>";
		while($rec = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td style='text-align:center;'>" . $rec["devid"] . "</td>"; 
			echo "<td style='text-align:center;'>" . $rec["date"] . "</td>";
			echo "<td style='text-align:center;'>" . $rec["light"] . "</td> ";
			echo "<td style='text-align:center;'>" . $rec["status"] . "</td> ";
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
