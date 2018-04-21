<?php
  $event_id = $_GET['event_id'];
  $conn = mysqli_connect('127.0.0.1','root','','gis_data_wah_cantt');
  if($conn)
  {
    $QUERY = "DELETE  FROM events WHERE id = $event_id";
    $RESULT = mysqli_query($conn,$QUERY);
    if($RESULT)
    {
      header('location: ../index.php');
    }
    else {
      echo "unexpected error occured!";
    }
  }
  else {
    echo "unexpected error occured!";
  }
?>
