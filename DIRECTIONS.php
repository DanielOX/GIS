<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GIS</title>
    <?php include('lib.php'); ?>
  </head>
<style media="screen">
.search-result
{
  width:50%;
  background-color:white;
  border:1px solid #eee;
  padding:12px 24px;
}
.search-result:hover
{
  background-color:#eee;
  transition:0.5s ease-in-out;
  cursor: pointer;
}

body
{
  height:250vh;
  max-height: 250vh;
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
<div class="container">
  <section id="myMap" ></section>

</div>
<script type="text/javascript">

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
          });
      }
    }

    http.open('GET','ret.php',true); //This function is used for storing info of request in Header Object of request;PREPARING THE REQUEST TO DATA FOR OUT ASYNC or AJAX REQUEST
    http.send();

};

  var myMap = document.getElementById('myMap');
  var map;
  function initmap()
  {
    var location = {lat:33.7715,lng:72.7511};
      map = new google.maps.Map(myMap,{
          center:location,
          zoom:16,
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

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT_DScCb8CgK0Ve546TQZYRjSHyQM67sw&callback=initmap"></script>





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








  </body>
</html>
