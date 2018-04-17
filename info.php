<?php

$_id = $_GET['id'];
$sub_id = $_GET['sub_id'];
$conn = mysqli_connect('localhost','root','','gis_data_wah_cantt');
if($conn)
{
  $QUERY = "SELECT * FROM locations WHERE id IN (SELECT location_id FROM location_type WHERE sub_type=$sub_id )";
  $RESULT = mysqli_query($conn,$QUERY);

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include('lib.php'); ?>
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

      <nav style="width:100%;height:60px;background-color:#eee;">

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




          <!-- Button trigger modal -->
          <button   style="display:none!important;" id="modal-opener" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            Launch demo modal
          </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>




<script>


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
          markerArray[0] = "";
          parsed.forEach(function(x){
            var marker = new google.maps.Marker({
                position:new google.maps.LatLng(x.lat,x.lng),
                animation:google.maps.Animation.DROP,
                title:x.name,
                map:map
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
  setTimeout(function(){
    markerArray[id].setAnimation(google.maps.Animation.BOUNCEx);
  },1690);
}



</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT_DScCb8CgK0Ve546TQZYRjSHyQM67sw&callback=initmap"></script>




  </body>
</html>
