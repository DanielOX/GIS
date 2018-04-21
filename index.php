<?php
include('includes/config.php');
$QUERY  = "SELECT * FROM events ORDER BY id DESC LIMIT 9";
$RESULT = mysqli_query($conn,$QUERY);






?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GIS</title>
    <?php include('includes/auth_check.php'); ?>
    <?php include('lib.php'); ?>
    <script type="text/javascript" src="cluster.js"></script>
  </head>
<style media="screen">
.search-result
{
  width:50%;
  background-color:white;
  border:1px solid #eee;
  padding:12px 24px;
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
#myMap
{
    height:90vh;
    width: 100%;
    overflow-y:hidden;
    background-attachment: fixed;
}
</style>

<body>
<?php include('includes/search.php'); ?>
<section id="myMap" ></section><br>
<div class="cotainer">
  <div class="row">
      <?php

        while($row = mysqli_fetch_array($RESULT))
        {
          echo '
            <div class=" lo col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div data-aos="fade-up" data-aos-duration="1200" class="card" style="width: 18rem;">
  <img class="card-img-top" style="min-width:286px;min-height:279.69px;max-width:286px;max-height:279.69px;" src="Events/'.$row['image'].'" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">'.$row['name'].'</h5>
    <p class="card-text">'.$row['description'].'</p>
    <a href="#" class="btn btn-primary">View Details <i class="fa fa-sign-out"></i> </a>
  </div>
</div>
</div>
';
        }



      ?><br>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">

<br>
    <?php include('includes/footer.php'); ?>

  </div>
</div>
<script type="text/javascript">
var markers = [];
window.onload = function(){

    AOS.init();

    var http = new XMLHttpRequest(); //create an instance or object of XMLHttpRequest() constructor function

    http.onreadystatechange=function() // <= CALLBACK FUNCTION whenever the http request or response state chnages this callback function is executed
    {
      if(this.readyState== 4 && this.status == 200)// Checks if the destination is found and response has been successfully recieved!
      {

          var parsed = JSON.parse(this.responseText);
                                                                //converts string json response to Javascript Object
          parsed.forEach(function(loc){ //loc is the current index holder
              var marker = new google.maps.Marker({
                  position:new google.maps.LatLng(loc.lat,loc.lng),
                  title:loc.name,
                  animation:google.maps.Animation.DROP,
                  map:map
              });
              var stringContent = '<div class="content"><p class="title" style="font-weight:bold">'+ loc.name +'</p><p class="Description">'+loc.description+'</p> <small class="pull-right">By:</small>&nbsp;<small style="font-size:14px">GIS</small></div>';
              var infoBOX = new google.maps.InfoWindow({
                  content:stringContent
              });
              markers.push(marker);

              marker.addListener('mouseover',function(){
                infoBOX.open(map,marker);

              });
              marker.addListener('mouseout',function(){
                infoBOX.close(map,marker);

              });

          });
          var markerCluster = new MarkerClusterer(map,markers,{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

      }
    }

    http.open('GET','Events/ret.php',true); //This function is used for storing info of request in Header Object of request;PREPARING THE REQUEST TO DATA FOR OUT ASYNC or AJAX REQUEST
    http.send();


};

  var myMap = document.getElementById('myMap');
  var map;
  function initmap()
  {
    var location = {lat:33.7715,lng:72.7511};
      map = new google.maps.Map(myMap,{
          center:location,
          zoom:13,
          minZoom:12
});
  }

  var getLatLng = function(_lat,_lng)
  {
    var _location = {
      lat:_lat,
      lng:_lng
    };
    map.setZoom(20);
    map.panTo( _location);

  }




</script>






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
                  parsed.forEach(function(log){
                      data += '<li onclick="getLatLng('+log.lat+','+log.lng+')" class="search-result">';
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
          http.open('GET','search.php?search_value='+search_bar.value,true);
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
<script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT_DScCb8CgK0Ve546TQZYRjSHyQM67sw&callback=initmap"></script>




  </body>
</html>
