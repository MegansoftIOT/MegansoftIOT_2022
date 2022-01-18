<?php
include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('iot_data');
$xcrud->order_by('create_date','desc'); 
$xcrud->limit(25);
$xcrud->unset_add(); // nested table instance access
$xcrud->unset_edit(); // nested table instance access
$xcrud->unset_remove(); // nested table instance access

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
