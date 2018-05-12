<?php

$_id = $_GET['id'];
$sub_id = $_GET['sub_id'];
$conn = mysqli_connect('127.0.0.1','root','','gis_data_wah_cantt');
if($conn)
{
  $QUERY = "SELECT * FROM locations WHERE id IN (SELECT location_id FROM location_type WHERE sub_type=$_id)";
  $RESULT = mysqli_query($conn,$QUERY);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include('includes/auth_check.php'); ?>

    <?php include('lib.php'); ?>
    <script type="text/javascript" src="cluster.js">

    </script>
  </head>

<style media="screen">
#myMap
{
    height:90vh;
    width: 100%;
    overflow-y:hidden;
    background-attachment: fixed;
}
.location_name
{
  padding:12px 24px;
  border:1px solid grey;
  margin:5px;
  list-style-type: none;

}
.location_name:hover
{
  background-color:#0a0;
  cursor:pointer;
  color:white;
  transition:0.5s ease-in-out;
}

#parent
{
  display: inline-flex;
}
#parent > li
{
  margin-left:25px;
  list-style-type: none;
  border:1px solid pink;
  width:25px;
  height:25px;
  border-radius:100%;
  background-color: pink;
}
#child1
{
  animation:animx 1s infinite alternate;
  animation-delay:.1s;
  animation-duration:0.5s;
}

#child2
{
  animation:animx 1s infinite alternate;
  animation-delay:.2s;
  animation-duration:0.5s;
}
#child3
{
  animation:animx 1s infinite alternate;
  animation-delay:.3s;
  animation-duration:0.5s;
}
@keyframes animx
{
from
{
transform:scale(0);
}
to
{
transform:scale(1);

}
}

</style>
  <body>

      <nav style="width:100%;height:60px;background-color:#eee;padding:12px 24px">
        <a href="index.php" style="font-size:18px;text-decoration:none;width:10%" class="btn btn-info"> Back </a>
        <a href="logout.php" style="font-size:18px;text-decoration:none;width:10%;color:white" class="btn btn-warning"> Logout </a>
      </nav>
      <br>
          <div class="row">
              <div  class="card col-sm-12 col-xs-12 col-md-6 col-lg-6">

                    <div class="card-body">
                        <input type="hidden" id="get_count" value="<?php echo mysqli_num_rows($RESULT); ?>">
                        <input type="hidden" id="get_id" value="<?php echo $_id; ?>">

                      <?php
                      echo '<ol>';
                      $row = mysqli_fetch_array($RESULT);
                      $cat = $row['general_type'];
                      $QUERY = "SELECT * FROM sub_categories where id ='$sub_id'";
                      $Q_Result = mysqli_query($conn,$QUERY);
                      $rowx = mysqli_fetch_array($Q_Result);
                      echo '<h4>Locations Of '.$rowx['name'].'</h4>';

                      $i=1;

                      echo "<li onclick='colorChange(".$i.")' data-id='".$i."' class='location_name' >";
                      echo ucfirst(strtolower($row['name']));
                      echo '</li>';
                      $i++;
                        while($row = mysqli_fetch_array($RESULT))
                        {
                            echo "<li onclick='colorChange(".$i.")' data-id='".$i."' class='location_name' >";
                            echo ucfirst(strtolower($row['name']));
                            echo '</li>';
                            $i++;
                        }
                            echo "</ol>";
                      ?>
                    </div>
              </div>
              <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6" style="position:fixed;left:50%;top:9%" >
                  <div id="myMap"></div>
            </div>

          </div>



<script>

var markersCluster = [];
    var myMap = document.getElementById('myMap');
    var map;
    var markerArray = [];
    function initmap()
    {
      var location = {lat:33.7715,lng:72.7511};
      map = new google.maps.Map(myMap,{
      center:location,
      zoom:13
    });
    }
var http2 = new XMLHttpRequest();
var get_id = document.getElementById('get_id').value;
http2.onreadystatechange = function()
{
      if(this.readyState == 4 && this.status == 200)
      {
          var parsed = JSON.parse(this.responseText);
          var increment = 1;
          parsed.forEach(function(loc){
            var marker = new google.maps.Marker({
                position:new google.maps.LatLng(loc.lat,loc.lng),
                animation:google.maps.Animation.DROP,
                title:loc.name,
                map:map
            });
            var path = 'http://localhost/GIS/location_pics/';
            path += loc.image;
            markersCluster.push(marker);
              var infoBOX = new google.maps.InfoWindow({
                content:'<div class="content" style="width:350px;height:180px"><p class="title" style="font-weight:bold">'+ loc.name +'</p><div style="background-size:cover;background-image:url('+path+');background-position:center center;width:100%;height:150px;"></div><p class="Description">'+loc.description+'</p> <small class="pull-right">By:</small>&nbsp;<small style="font-size:14px">GIS</small></div>'
            });

            infoBOX.close(map,marker);
            marker.addListener('mouseout',function(){
            });
            marker.addListener('click',function(){
              infoBOX.open(map,marker);
            });

            marker.set("id",increment);
            markerArray[increment] = marker;
            increment++;
          });



      }
}
  http2.open('GET','get_location_from_category.php?cat_id='+get_id,true);
  http2.send();

function colorChange(id)
{
  markerArray[id].setIcon('icons/green.png');
  markerArray[id].setAnimation(google.maps.Animation.BOUNCE);
  new google.maps.event.trigger(markerArray[id],'click');
  setTimeout(function(){
    markerArray[id].setAnimation(google.maps.Animation.BOUNCEx);
  },1690);

}



</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT_DScCb8CgK0Ve546TQZYRjSHyQM67sw&callback=initmap"></script>




  </body>
</html>
