<?php
include('xcrud/xcrud.php');
    $xcrud = Xcrud::get_instance();
    $xcrud->table('temperature_sensor');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Temparature Sensor</title>
</head>
 
<body>
 
<?php
    echo $xcrud->render();
?>
 
</body>
</html>
