<!DOCTYPE html">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MAP </title>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>" >
</head>
<style>
.mySlides {display:none;}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
    </ul>
  </div>
</nav>

<div class="card-header">HCET COLLEGE MAPS</div>

  <div class="card-body">
  	<div class="btn-group-Horizontal" data-toggle="buttons">
 <a href="<?= base_url('main_controller/accounts');?>"><button type="button" class="btn btn-primary">Account Hall</button></a>
  <a href="<?= base_url('main_controller/principal');?>"><button type="button" class="btn btn-primary">Principal Office</button></a>
  <a href="<?= base_url('main_controller/finance');?>"><button type="button" class="btn btn-primary">Finance Control</button></a>
  <a href="<?= base_url('main_controller/Library');?>"><button type="button" class="btn btn-primary">Library</button></a>
  <a href="<?= base_url('main_controller/meetingroom');?>"><button type="button" class="btn btn-primary">Meeting room</button>
  <a href="<?= base_url('main_controller/registar');?>"><button type="button" class="btn btn-primary">Resistar office</button></a>


</div>
  	<div class="w3-content w3-section" style="width:500px ">
  <img class="mySlides" src="<?= base_url('assets/images/map/paths/Financecontrol/1.jpg')?>" style="width:100%">
  <img class="mySlides" src="<?= base_url('assets/images/map/paths/Financecontrol/2.jpg')?>" style="width:100%">
  <img class="mySlides" src="<?= base_url('assets/images/map/paths/Financecontrol/3.jpg')?>" style="width:100%">
  <img class="mySlides" src="<?= base_url('assets/images/map/paths/Financecontrol/4.jpg')?>" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 1000); // Change image every 2 seconds
}
</script>
  </div>
</div>
<div class="card-header">GOOGLE MAP VIEW</div>
  <div class="card-body">
    <iframe height="400" width="1400" src="https://www.google.co.in/maps/place/Hitkarini+College+of+Engineering+%26+Technology/@23.1636606,79.9962455,15z/data=!4m2!3m1!1s0x0:0x7a8002ac2a17d69?sa=X&ved=0ahUKEwjEw--Uh9baAhUD2o8KHSqZCaUQ_BII0QEwDg"></iframe>
    <h4 class="card-title"></h4>

    <a href="https://www.google.co.in/maps/place/Hitkarini+College+of+Engineering+%26+Technology/@23.1636606,79.9962455,15z/data=!4m5!3m4!1s0x0:0x7a8002ac2a17d69!8m2!3d23.1636606!4d79.9962455"><p class="card-text">Click Here For Vist our college</p></a>
  </div>
</div>
<div class="card-header">GOOGLE MAP VIEW</div>
  <div class="card-body">
    <iframe height="400" width="1400" src="https://www.google.co.in/maps/place/Hitkarini+College+of+Engineering+%26+Technology/@23.1636606,79.9962455,15z/data=!4m2!3m1!1s0x0:0x7a8002ac2a17d69?sa=X&ved=0ahUKEwjEw--Uh9baAhUD2o8KHSqZCaUQ_BII0QEwDg"></iframe>
    <h4 class="card-title"></h4>

    <a href="https://www.google.co.in/maps/place/Hitkarini+College+of+Engineering+%26+Technology/@23.1636606,79.9962455,15z/data=!4m5!3m4!1s0x0:0x7a8002ac2a17d69!8m2!3d23.1636606!4d79.9962455"><p class="card-text">Click Here For Vist our college</p></a>
  </div>
</div>
</body>
</html>