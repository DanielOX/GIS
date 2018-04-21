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
    <?php include('includes/auth_check.php'); ?>

    </script>
  </head>
<style media="screen">
  body > *
  {
    font-family: 'Raleway', sans-serif;

  }
  body
  {
    overflow-x: hidden;
  }
  .search-result
  {
    width:30%;
    background-color:white;
    border:1px solid #eee;
    padding:12px 24px;
    text-align: left;
  }
  .lo
  {
    margin:4px;
    margin-left:10px;
  }
  .search-result:hover
  {
    background-color:#eee;
    transition:0.5s ease-in-out;
    cursor: pointer;
  }

  body
  {
    overflow-y: scroll;
    overflow-x: hidden;
  }
  li
  {
    list-style-type:none;

  }

</style>
    <body>

<div class="row">

<div style="width:100%;height:50px;background-color:#aaa;padding:4px 24px">
  <center>
      <div class="container">
        <div class="form-group">
          <input id="search_bar" class="form-control"  type="search" placeholder="Type or Select Location From Map Below" aria-label="Search">
          <ul id="search-parent" style="width:130%;position:absolute;margin:0;padding:none;top:6.5%;z-index:1000;left:-38.5%" >
          </ul>

        </div>
      </div>
  </center>
</div>

  <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12">
        <div class="container">
          <center>
              <h5 style="margin-top:5px">Fill Event Form</h5>
              <span style="display:inline-block;background-color:#aea;width:15%;height:2px;border-radius:25%"></span>
          </center>
          <form action="events.php" method="post" enctype="multipart/form-data" style="margin-top:-20px">
                <div class="form-group">

                  <label for="event_name">Event Name</label>
                  <input type="text" name="title" id="event_name" class="form-control" placeholder="Event Name..." maxlength="100" value="" required>
              </div>
              <div class="form-group">
                <label for="event_description"> <span  style="color:#aea;font-weight:bold;font-size:24px">E</span>vent  <span  style="color:#aea;font-weight:bold;font-size:24px">D</span>escription</label>
                <textarea  name="description" rows=10 id="event_description" required placeholder="Enter description of event max words 255..." class="form-control" value="" maxlength="255" ></textarea>
            </div>
            <div class="form-group">
                <label for="eventImage">Event Image</label><br>
                <input type="file" class="btn btn-primary" name="eventImage" required id="eventImage"/>
            </div>
         <div class="form-group">
              <label for="event_location">Location Selected</label>
              <input type="text" name="event_location" id="event_location" class="form-control" required value="" />
        </div>

        <div class="form-group">
          <input type="text" style="display:none" id="event_location_id" name="location" value="" />
        </div>

                 <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success pull-right"> <i class="fa fa-paper-plane-o"></i> </button>
                </div>
                <br>
                  <br>
          </form>

        </div>
  </div>
  <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12">
    <div id="displayMap" style=" width:100% !important;"></div>
  </div>

</div>






    <script type="text/javascript">
      var map;
      var markers = [];
      var getLatLng = function(name,id)
      {
        var event_location = document.getElementById('event_location');
        event_location.value= name;
        var event_location_id = document.getElementById('event_location_id');
        event_location_id.value = id ;
      }

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

                      var stringContent = '<div class="content"><p class="title" style="font-weight:bold">'+ loc.name +'</p><p class="Description">'+loc.description+'</p> <small class="pull-right">By:</small>&nbsp;<small style="font-size:14px">GIS</small></div>';
                      var infoBOX = new google.maps.InfoWindow({
                          content:stringContent
                      });

                      marker.addListener('mouseover',function(){
                        infoBOX.open(map,marker);

                      });
                      marker.addListener('mouseout',function(){
                        infoBOX.close(map,marker);

                      });
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








    </script>
    <script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT_DScCb8CgK0Ve546TQZYRjSHyQM67sw&callback=initmap"></script>
    <script type="text/javascript">
    var search_bar = document.getElementById('search_bar');
    var search_parent = document.getElementById('search-parent');
    search_bar.addEventListener('keyup',function(){

        var http = new XMLHttpRequest();
        http.onreadystatechange = function()
        {

            if(this.readyState == 4 && this.status == 200)
            {
                var parsed =JSON.parse(this.responseText);
                var data = "";
                  if(parsed[0] !=  "0" )
                  {
                    console.log(parsed[0]);
                    parsed.forEach(function(log){
                        data += '<li onclick="getLatLng(\''+log.name+'\','+log.id+')" class="search-result">';
                        data += '<a>';
                        data += log.name;
                        data += '<a>';
                        data += '</a>';
                        data += '</li>';
                    });

                  }else
                  {
                    data = "";
                  }
                search_parent.innerHTML = data;
            }
        }
          if(search_bar.value != "")
          {
            http.open('GET','../search.php?search_value='+search_bar.value,true);
            http.send();
          }
          else
          {
            search_parent.innerHTML = "";
          }

    });

  document.addEventListener('click',function(){
    search_parent.innerHTML = "";
  });

    </script>
   </body>
</html>
