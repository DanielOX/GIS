<?php

$e_id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','gis_data_wah_cantt');
if(!$conn)
{
  echo "Unexpected Error Occured!";
  exit(0);
}
else
{
  $query = "DELETE FROM events WHERE id  =$e_id";
  $result = mysqli_query($conn,$query);
  if(!$result)
  {
    echo "Unexpected Error Occured WHILE DELETING EVENTS!";
    exit(0);
  }
  else
  {
    header('location: view_events.php');
  }
}

?>
