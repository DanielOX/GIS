<?php
$SERVER = "localhost";
$USER   = "root";
$PASSWORD = "";
$DB = "gis_data_wah_cantt";
$conn = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
if($conn)
{
$QUERY = "SELECT * FROM locations";
$RESULT  = mysqli_query($conn,$QUERY);
$arr = array();
$i=0;
while($row = mysqli_fetch_array($RESULT))
{
  $arr[$i] = $row;
  $i++;
}
echo json_encode($arr);
}
else
 {
  echo "not connect";
}




?>
