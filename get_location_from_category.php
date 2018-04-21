<?php
$sub = $_GET['cat_id'];
$SERVER = "127.0.0.1";
$USER   = "root";
$PASSWORD = "";

$DB = "gis_data_wah_cantt";
$conn = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);

$QUERY = "SELECT * FROM locations WHERE id IN (SELECT location_id FROM location_type WHERE sub_type=$sub)";
$RESULT = mysqli_query($conn,$QUERY);
$arr = array();
$i=0;
while($row = mysqli_fetch_array($RESULT))
{
  $arr[$i] = $row;
  $i++;
}
echo json_encode($arr);
?>
