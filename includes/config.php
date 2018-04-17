<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gis";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>



 