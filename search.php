<?php
$conn = mysqli_connect('localhost','root','','gis_data_wah_cantt');
$value = strtoupper($_GET['search_value']);
if($value != "")
{
  $query = "SELECT name,lat,lng FROM locations WHERE name LIKE '". $value."%'";
  $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result) > 0)
  {
    $arr = [];
    $i=0;
    while($row = mysqli_fetch_array($result))
    {
      $arr[$i] = $row;
      $i++;
    }

    echo json_encode($arr);

  }
  else
  {
    $row = mysqli_fetch_array($result);
    $arr[0] = "0";
    echo json_encode($arr);
  }


}



?>
