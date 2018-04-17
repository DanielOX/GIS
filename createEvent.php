<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GIS LOCATION</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<style media="screen">
  body > *
  {
    font-family: 'Raleway', sans-serif;

  }
</style>
    <body>

<div class="row">

  <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12">
        <div class="container">
          <center>
            <br>
              <h5>Fill Event Form</h5>
              <span style="display:inline-block;background-color:#aea;width:15%;height:2px;border-radius:25%"></span>
          </center>
          <form action="events.php" method="post">
                <div class="form-group">

                  <label for="event_name">Event Name</label>
                  <input type="text" name="title" id="event_name" class="form-control" placeholder="Event Name..." maxlength="100" value="" required>
              </div>
              <div class="form-group">
                <label for="event_description"> <span  style="color:#aea;font-weight:bold;font-size:24px">E</span>vent  <span  style="color:#aea;font-weight:bold;font-size:24px">D</span>escription</label>
                <textarea  name="description" rows=10 id="event_description" placeholder="Enter description of event max words 255..." class="form-control" value="" maxlength="255" required></textarea>
            </div>
         <div class="form-group">
              <label for="event_location">Location Selected</label>
              <input type="text" id="event_location" class="form-control" disabled value="" />
        </div>

         <div class="form-group">
            <input type="text" style="display:none" id="event_location_id" name="location" value="" />
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success pull-right"><i class="fa fa-paper-plane-o"></i> </button>
      </div>
          </form>

        </div>
  </div>
  <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12">
    <div id="displayMap" style=" width:100% !important;"></div>
  </div>

</div>






    <script type="text/javascript">
      var map;
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
        }
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

                    marker.addListener('click',function(){
                        var event_location = document.getElementById('event_location');
                        event_location.value= marker.title;

                        var event_location_id = document.getElementById('event_location_id');
                        event_location_id.value = loc.id ;
                    });

                  });
              }
            }
            http.open('GET','ret.php',true); //This function is used for storing info of request in Header Object of request;PREPARING THE REQUEST TO DATA FOR OUT ASYNC or AJAX REQUEST
            http.send();
        };








    </script>
    <script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT_DScCb8CgK0Ve546TQZYRjSHyQM67sw&callback=initmap"></script>

   </body>
</html>
