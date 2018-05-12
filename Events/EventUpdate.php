<?php
$event_id = $_POST['event_id'];
$event_image = $_FILES['eventImage'];
$timer_dir = $_GET['dir'];
$title = $_POST['title'];
$description = $_POST['description'];
$location = $_POST['location'];
$event_location = $_POST['event_location'];

$conn = mysqli_connect('127.0.0.1','root','','gis_data_wah_cantt');


$QUERY = "UPDATE events SET (name = '$title',description = '$description',location = $location) WHERE id = $event_id";
$RESULT = mysqli_query($conn,$QUERY);
if($RESULT)
{
header('location: EventShow.php?event_id='.$RECENTLY_ADDED_ID.'&loc='.$event_location);
}
else
{
  echo 'An unexpected error occured!';
}

?>
