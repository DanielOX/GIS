<?php

$title = $_POST['title'];
$event_image = $_FILES['eventImage'];
$description = $_POST['description'];
$location = $_POST['location'];
$event_location = $_POST['event_location'];
$conn = mysqli_connect('127.0.0.1','root','','gis_data_wah_cantt');
$timer_dir = time();

mkdir('EventsImages/'.$timer_dir,0777);
$image_path = 'EventsImages/'.$timer_dir.'/'.$_FILES['eventImage']['name'];
move_uploaded_file($_FILES['eventImage']['tmp_name'],$image_path);
session_start();
$organizer = $_SESSION['name'];

$QUERY = "INSERT INTO  events (name,description,location,image,organizer) VALUES ('$title','$description',$location,'$image_path','$organizer')";
$RESULT = mysqli_query($conn,$QUERY);
$RECENTLY_ADDED_ID = $conn->insert_id;
if($RESULT)
{
  $image = $_FILES['eventImage']['name'];
  header('location: EventShow.php?event_id='.$RECENTLY_ADDED_ID.'&loc='.$event_location.'&dir='.$timer_dir);
}
else
{
  echo 'An unexpected error occured!';
}




?>
