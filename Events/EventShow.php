<?php include('../includes/auth_check.php'); ?>

<?php
$event_id = $_GET['event_id'];
$loc = $_GET['loc'];
$conn = mysqli_connect('127.0.0.1','root','','gis_data_wah_cantt');
$QUERY = "SELECT * FROM events WHERE id = $event_id";
$RESULT = mysqli_query($conn,$QUERY);
$ROW = mysqli_fetch_array($RESULT);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GIS LOCATION</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../cluster.js">

    </script>
  </head>
<style media="screen">
  body > *
  {
    font-family: 'Raleway', sans-serif;

  }
  body
  {
    overflow-x: hidden;;
  }
</style>
    <body>

<div class="row">

  <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12" style="overflow-y:scroll">
        <div class="container">
          <center>
            <br>
              <h5>Verify Your Event Data</h5>
              <span style="display:inline-block;background-color:#aea;width:15%;height:2px;border-radius:25%"></span>
          </center>
          <form action="events.php" method="post">
                <div class="form-group">

                  <label for="event_name">Event Name</label>
                  <input type="text" name="title" id="event_name" class="form-control" placeholder="Event Name..." maxlength="100" value="<?php echo $ROW['name']; ?>" required>
              </div>
              <div class="form-group">
                <label for="event_description"> <span  style="color:#aea;font-weight:bold;font-size:24px">E</span>vent  <span  style="color:#aea;font-weight:bold;font-size:24px">D</span>escription</label>
                <textarea  name="description" rows=10 id="event_description" placeholder="Enter description of event max words 255..." class="form-control" va maxlength="255" required><?php echo $ROW['description']; ?></textarea>
            </div>
         <div class="form-group">
              <label for="event_location">Location Selected</label>
              <input type="text" name="event_location" id="event_location" class="form-control"  value="<?php echo $loc; ?>" />
        </div>

           <div class="form-group">
            <input type="text" style="display:none" id="event_location_id" name="location" value="<?php echo $ROW['location']; ?>" />
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-refresh"></i> </button>
      </div>
          <input type="hidden" id="event_id" name="event_id" value="<?php echo $event_id; ?>">
          </form>
          <button id="verifier" type="button" class="btn btn-success pull-left"> <i class="fa fa-check"></i> </button>
          <button id="deleter" type="button" class="btn btn-danger pull-right" style="margin-right:1%"> <i class="fa fa-trash"></i> </button>
        </div>
  </div>
  <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12">
    <div id="displayMap" style=" width:100% !important;"></div>
  </div>

</div>







    <script type="text/javascript">
      var map;
      var markers = [];
        var initmap = function()
        {
          var displayMap = document.getElementById('displayMap');
          var location = {lat:33.7715,lng:72.7511}; // WAH CANTT LOCATION
           map = new google.maps.Map(displayMap,
            {
              center:location,
              zoom:12,
              minZoom:12
            });
        };

          /*
            AJAX => Asynchronous Javascript And XML Request Initialized when document is loaded
          */

        window.onload = function(){
            var http = new XMLHttpRequest(); //create an instance or object of XMLHttpRequest() constructor function

            http.onreadystatechange=function() // <= CALLBACK FUNCTION whenever the http request or response state chnages this callback function is executed
            {
              if(this.readyState== 4 && this.status == 200)// Checks if the destination is found and response has been successfully recieved!
              {
                  var parsed = JSON.parse(this.responseText); //converts string json response to Javascript Object
                  parsed.forEach(function(loc){ //loc is the current index holder
                      var marker = new google.maps.Marker({
                          position:new google.maps.LatLng(loc.lat,loc.lng),
                          title:loc.name,
                          animation:google.maps.Animation.DROP,
                          map:map
                      });
                      markers.push(marker);
                    marker.addListener('click',function(){
                        var event_location = document.getElementById('event_location');
                        event_location.value= marker.title;

                        var event_location_id = document.getElementById('event_location_id');
                        event_location_id.value = loc.id ;



                    });

                  });
                  var MarkerCluster = new MarkerClusterer(map,markers,{imagePath:'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
              }
            }
            http.open('GET','ret.php',true); //This function is used for storing info of request in Header Object of request;PREPARING THE REQUEST TO DATA FOR OUT ASYNC or AJAX REQUEST
            http.send();
        };




          var deleter = document.getElementById('deleter');
          deleter.addEventListener('click',function(){
            var event_id = document.getElementById('event_id').value;
              window.location.href = "EventDelete.php?event_id="+event_id;
          });

          var verifier = document.getElementById('verifier');
          verifier.addEventListener('click',function(){
              window.location.href = "../index.php";
          });




    </script>
    <script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT_DScCb8CgK0Ve546TQZYRjSHyQM67sw&callback=initmap"></script>

   </body>
</html>

   </body>
</html>
