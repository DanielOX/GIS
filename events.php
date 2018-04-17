<?php

$title = $_POST['title'];
$description = $_POST['description'];
//$location = $_POST['location'];
$conn = mysqli_connect('localhost','root','','gis_data_wah_cantt');

$QUERY = "INSERT INTO  events (title,description) VALUES ('$title','$description')";
$RESULT = mysqli_query($conn,$QUERY);
$RECENTLY_ADDED_ID = $conn->insert_id;

if($RESULT)
{
header('location: EventShow.php?event_id='.$RECENTLY_ADDED_ID);
}
else
{
  echo 'An unexpected error occured!';
}




?>
