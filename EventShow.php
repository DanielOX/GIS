<?php
$event_id = $_GET['event_id'];
$conn = mysqli_connect('localhost','root','','gis_data_wah_cantt');
$QUERY = "SELECT * FROM events WHERE id = $event_id";
$RESULT = mysqli_query($conn,$QUERY);
$ROW = mysqli_fetch_array($RESULT);









?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $ROW['title']; ?></title>
  </head>
  <body>
    <p>
      <?php echo $ROW['title']; ?>
    </p>
    <p>
      <?php echo $ROW['description']; ?>
    </p>


  </body>
</html>
