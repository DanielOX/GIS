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
  <nav class="navbar navbar-expand-lg navbar-light bg-light z-depth-4" style="box-shadow:1px 0.5px 3px 3px #aaa;width:100%">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Education
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="info.php?id=1&sub_id=1">Schools</a>
          <a class="dropdown-item" href="info.php?id=2&sub_id=2">Colleges</a>
          <a class="dropdown-item" href="info.php?id=3&sub_id=3">Universities</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Food
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="info.php?id=4&sub_id=4">Bakeries</a>
          <a class="dropdown-item" href="info.php?id=5&sub_id=5">Restaurants</a>
          <a class="dropdown-item" href="info.php?id=6&sub_id=6">Fastfood</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Health
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="info.php?id=7&sub_id=7">Hospitals</a>
          <a class="dropdown-item" href="info.php?id=8&sub_id=8">Clinics</a>

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Others
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="info.php?id=9&sub_id=9">Banks</a>
          <a class="dropdown-item" href="info.php?id=10&sub_id=10">Office</a>
          <a class="dropdown-item" href="info.php?id=11&sub_id=11">Mosques</a>
          <a class="dropdown-item" href="info.php?id=12&sub_id=12">General Stores</a>
          <a class="dropdown-item" href="info.php?id=13&sub_id=13">Famous Places</a>
          <a class="dropdown-item" href="info.php?id=14&sub_id=14">Stationary</a>
          <a class="dropdown-item" href="info.php?id=15&sub_id=15">Chemists</a>
      </li>
      <li class="nav-item ">
        <a href="CreateEvent.php" class="nav-link">Create Event</a>
      </li>

    </ul>
    <form class="form col-lg-6 col-md-6" style="width:50%">

<!-- SEARCH BAR !-->

          <input id="search_bar" class="form-control"  type="search" placeholder="Search" aria-label="Search">









          <ul id="search-parent" style="width:197%;position:absolute;margin:0;padding:none;top:100%;z-index:1000;left:-4.099%" >

          </ul>

    </form>
  </div>
</nav>
<section id="myMap" >

</section>
<br>

<div class="container">
  <div class="row" style="margin-left:9%">
    <div class="col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1 col-md-4 col-lg-3 card" data-aos="fade-up" data-offset="1000" data-aos-duration="1200" data-aos-easing:"ease-in-out" style="width: 18rem;height:24rem;box-shadow:0.5px 2.5px 4px 1px #aaa;margin:2.5%">
      <div class="card-img-top" style="margin-top:5px;background-image:url('http://hdwarena.com/wp-content/uploads/2017/04/Beautiful-Wallpaper.jpg');width:100%;height:100%;background-size:cover;"></div>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1 col-md-4 col-lg-3 card" data-aos="fade-up" data-offset="1000" data-aos-duration="1200" data-aos-easing:"ease-in-out" style="width: 18rem;height:24rem;box-shadow:0.5px 2.5px 4px 1px #aaa;margin:2.5%">
      <div class="card-img-top" style="margin-top:5px;background-image:url('http://hdwarena.com/wp-content/uploads/2017/04/Beautiful-Wallpaper.jpg');width:100%;height:100%;background-size:cover;"></div>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1 col-md-4 col-lg-3 card" data-aos="fade-up" data-offset="1000" data-aos-duration="1200" data-aos-easing:"ease-in-out" style="width: 18rem;height:24rem;box-shadow:0.5px 2.5px 4px 1px #aaa;margin:2.5%">
      <div class="card-img-top" style="margin-top:5px;background-image:url('http://hdwarena.com/wp-content/uploads/2017/04/Beautiful-Wallpaper.jpg');width:100%;height:100%;background-size:cover;"></div>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1 col-md-4 col-lg-3 card" data-aos="fade-up" data-offset="1000" data-aos-duration="1200" data-aos-easing:"ease-in-out" style="width: 18rem;height:24rem;box-shadow:0.5px 2.5px 4px 1px #aaa;margin:2.5%">
      <div class="card-img-top" style="margin-top:5px;background-image:url('http://hdwarena.com/wp-content/uploads/2017/04/Beautiful-Wallpaper.jpg');width:100%;height:100%;background-size:cover;"></div>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1 col-md-4 col-lg-3 card" data-aos="fade-up" data-offset="1000" data-aos-duration="1200" data-aos-easing:"ease-in-out" style="width: 18rem;height:24rem;box-shadow:0.5px 2.5px 4px 1px #aaa;margin:2.5%">
      <div class="card-img-top" style="margin-top:5px;background-image:url('http://hdwarena.com/wp-content/uploads/2017/04/Beautiful-Wallpaper.jpg');width:100%;height:100%;background-size:cover;"></div>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1 col-md-4 col-lg-3 card" data-aos="fade-up" data-offset="1000" data-aos-duration="1200" data-aos-easing:"ease-in-out" style="width: 18rem;height:24rem;box-shadow:0.5px 2.5px 4px 1px #aaa;margin:2.5%">
      <div class="card-img-top" style="margin-top:5px;background-image:url('http://hdwarena.com/wp-content/uploads/2017/04/Beautiful-Wallpaper.jpg');width:100%;height:100%;background-size:cover;"></div>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1 col-md-4 col-lg-3 card" data-aos="fade-up" data-offset="1000" data-aos-duration="1200" data-aos-easing:"ease-in-out" style="width: 18rem;height:24rem;box-shadow:0.5px 2.5px 4px 1px #aaa;margin:2.5%">
      <div class="card-img-top" style="margin-top:5px;background-image:url('http://hdwarena.com/wp-content/uploads/2017/04/Beautiful-Wallpaper.jpg');width:100%;height:100%;background-size:cover;"></div>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1 col-md-4 col-lg-3 card" data-aos="fade-up" data-offset="1000" data-aos-duration="1200" data-aos-easing:"ease-in-out" style="width: 18rem;height:24rem;box-shadow:0.5px 2.5px 4px 1px #aaa;margin:2.5%">
      <div class="card-img-top" style="margin-top:5px;background-image:url('http://hdwarena.com/wp-content/uploads/2017/04/Beautiful-Wallpaper.jpg');width:100%;height:100%;background-size:cover;"></div>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1 col-md-4 col-lg-3 card" data-aos="fade-up" data-offset="1000" data-aos-duration="1200" data-aos-easing:"ease-in-out" style="width: 18rem;height:24rem;box-shadow:0.5px 2.5px 4px 1px #aaa;margin:2.5%">
      <div class="card-img-top" style="margin-top:5px;background-image:url('http://hdwarena.com/wp-content/uploads/2017/04/Beautiful-Wallpaper.jpg');width:100%;height:100%;background-size:cover;"></div>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

</div>

<div class="row" style="background-color:#2F4F4F;padding:5% 10%;">
<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
  <ul style="display:inline-flex" class="pull-right ">
    <li><a href="#"> <i class="fa fa-user"></i> </a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
  </ul>
</div>
<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
    <ul style="color:white">
      <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
      <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
      <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
      <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
      <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
      <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
      <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
    </ul>

</div>

<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">

  <ul style="color:white">
    <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
    <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
    <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
    <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
  </ul>


</div>

<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
  <ul style="color:white">
    <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
    <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
    <li style="list-style-type:none"> <a style="color:white" href="#"> DATA </a> </li>
  </ul>


</div>

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
