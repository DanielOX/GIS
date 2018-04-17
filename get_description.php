<?php
$get_id = $_GET['id'];

$SERVER = "localhost";
$USER   = "root";
$PASSWORD = "";

$DB = "gis_data_wah_cantt";
$conn = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);

$QUERY = "SELECT * FROM locations WHERE id='$get_id'";
$RESULT = mysqli_query($conn,$QUERY);

$arr = [];
$row = mysqli_fetch_array($RESULT);
$arr[0] =  $row;

echo json_encode($arr);



?>
