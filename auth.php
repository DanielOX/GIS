<?php
function sanitizer($data)
{
  $data = htmlspecialchars(stripslashes(strip_tags(str_replace(array(')','(',),'',$data)))) ;
  return $data;
}
include('includes/config.php');
$email = sanitizer($_POST['email']);
$password = $_POST['password'];

$QUERY = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$RESULT = mysqli_query($conn,$QUERY);
$ROW = mysqli_fetch_assoc($RESULT);
if(mysqli_num_rows($RESULT) > 0)
{
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $ROW['name'];
    header('location: index.php');
}
else {
  header('location: login.php');
}
 ?>
