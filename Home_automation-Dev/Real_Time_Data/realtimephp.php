<?php
$servername = "localhost";
$username = "dev1";
$password = "megan123";
$dbname = "sensor_data";
$c = $_GET['c'];
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	echo "Connection Error " . $conn->connect_error;
}

else{
	if($c == 1){
	$tquery = "select temp from temparature_sensor order by date desc limit 1";
	$tdata = $conn->query($tquery);
	if($tdata->num_rows > 0){
		while($trec = $tdata->fetch_assoc()){
			echo $trec["temp"];
		}
	} 
	else{
		echo "No data";
	}
	}
	elseif($c == 2){
	$lquery = "select status from light_sensor order by date desc limit 1";
        $ldata = $conn->query($lquery);
        if($ldata->num_rows > 0){
                while($lrec = $ldata->fetch_assoc()){
                        echo $lrec["status"];
                }
        } 
        else{
                echo "No data";
        }
	}
}

$conn->close();
?>
