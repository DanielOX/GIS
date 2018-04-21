<?php
session_start();
$_SESSION = array();
if(session_destroy())
{
  header('location: login.php');
}
else {
  echo "There was an error while logging you out!";
}


 ?>
