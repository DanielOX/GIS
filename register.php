<?php
$email = $_POST['email'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];
$name = $_POST['name'];

if($pass !== $pass2)
{
  echo "Password Mismatch";
  echo '<a href="signup.php">Try Again</a>';
  exit(0);
}
include('includes/config.php');
$QUERY = "SELECT * FROM users WHERE email = '$email'";
$RESULT = mysqli_query($conn,$QUERY);
if(mysqli_num_rows($RESULT) > 0)
{
  echo 'User Already Exists! &nbsp;';
  echo '<a href="signup.php">Try Again</a>';

}
else
{
  $QUERY = "INSERT INTO users (id,name,email,password) VALUES (NULL,'$name','$email','$pass')";
  $RESULT = mysqli_query($conn,$QUERY);
  if($RESULT)
  {
     header('location: login.php');

  }else {
    echo "an unexpected error occured!";
  }

}







?>
