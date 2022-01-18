<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
        <link rel="stylesheet" href="../CSS/main.css">
</head>

<body class="main">

        <ul class="main">
                <li class="main"><a href="../Home_Page/main.php">Main</a></li>
                <li class="main"><a href="../Real_Time_Data/realtimehtml.html">Realtime Data</a></li>
                <li class="main"><a href="../DataLogDisplay/data_log_display.php">Display</a></li>
        </ul>
        <p class="main">
                Welcome<br>line 1<br>line 2.
        </p>
        <div class="light">
                <p id="lightctrlheading">Light Control</p>
		<p>
			<?php
        		$status = $_GET['s'];
        		if(isset($status)){
                		if($status == 2){
                        		$msg = "Failed to change the light status. Please try again.";
                		}
                		elseif($status == 1){
                        		$msg = "Light status changed successfully";
                		}
        		}
        		echo $msg;
        		?>
		</p>
                <form id="lightctrl" method="post" action="./Remote_Controls/ctrlsend.php">
                        <input type="radio" name="lightstatus" value="1">ON<br>
                        <input type="radio" name="lightstatus" value="0">OFF<br>
                        <input id="lightset" type="submit" name="Set" value="Set">
                </form>
        </div>
        <div class="temperature">
                <p id="tempctrlheading">Temperature Control</p>
                <form id="tempctrl" method="post" action="#lightctrl">
                        <!--<input type="radio" name="lightstatus" value="1">AC ON<br>
                        <input type="radio" name="lightstatus" value="0">AC OFF<br>-->
                        <input type="range" name="temperature" min="18" max="35" value="25" class="tempslider" id="temprange"><br>
                        <p>Temperature: <span id="tempvalue"></span></p>
                        <input id="tempset" type="submit" name="Set" value="Set">
                </form>
        </div>
        <script>
                var slider = document.getElementById("temprange");
                var tempv = document.getElementById("tempvalue");
                tempv.innerHTML = slider.value;
                slider.oninput = function(){
                        tempvalue.innerHTML = this.value;
                }
        </script>
</body>
</html>

