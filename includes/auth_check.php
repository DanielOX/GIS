<?php
session_start();

if(!(isset($_SESSION['name']) && isset($_SESSION['email'])))
{
  header('location: login.php');
}
?>
