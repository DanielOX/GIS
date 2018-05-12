<?php
session_start(); //temp val store in browser

if(!(isset($_SESSION['name']) && isset($_SESSION['email']))) //if user is not logged in!
{
  header('location: login.php');
}
?>
