<?php 
session_start();
require_once "pdo.php";
require_once "layout.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <div class="container-fluid" style="background-color: white;" height="20px">
   <center> 
   <?php
    if (isset($_SESSION['success']))   //user logged in 
    {
        echo "Welcome Back ".$_SESSION['name']."!";
        echo "<br>";
    }
    ?>
   <h2><span class="title">Crazy offers for your cravings!!!</span></h2>
   </center>
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="slide15.png" width="20%" height="50%">
      </div>
      <div class="carousel-item">
        <img src="{{ url_for('static', filename='slide12.jpg') }}"  width="inherit" height="50%">
      </div>
      <div class="carousel-item">
        <img src="{{ url_for('static', filename='slide13.jpg') }}"  width="inherit" height="50%">
      </div>
      <div class="carousel-item">
        <img src="{{ url_for('static', filename='slide11.jpg') }}"  width="inherit" height="50%">
      </div>
    </div>
    
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
<div class="container-fluid">
    <br><br><br>
    <h2 class="title"><center>Deals of the Day</center></h2>
    <div class="card-columns">
        <div class="card" style="width:100%">
            <a href="#"><img class="card-img-top" src="{{ url_for('static', filename='home1.jpg') }}" alt="Card image" style="width:100%"></a>
            <div class="card-body">
            <h4 class="card-title">Chinese</h4>
            <p class="card-text">Grab fantastic offers on chinese cuisine now!!! </p>
            <a href="{{ url_for('categorypage', catname='chinese')}}" class="btn btn-primary">Explore</a>
            </div>
        </div>
        <div class="card" style="width:100%">
          <a href="#"><img class="card-img-top" src="{{ url_for('static', filename='home2.jpg') }}" alt="Card image" style="width:100%"></a>
          <div class="card-body">
          <h4 class="card-title">Indian</h4>
          <p class="card-text">Order Authentic Indian food from top restrurant in city at lowest price!</p>
          <a href="{{ url_for('categorypage', catname='indian')}}" class="btn btn-primary">Explore</a>
          </div>
      </div>
        <div class="card" style="width:100%">
            <a href="#"><img class="card-img-top" src="{{ url_for('static', filename='home3.jpg') }}" alt="Card image" style="width:100%"></a>
            <div class="card-body">
            <h4 class="card-title">Fast food</h4>
            <p class="card-text">Upto 50% off on selected food items...Hurry up!!!</p>
            <a href="{{ url_for('categorypage', catname='fast food')}}" class="btn btn-primary">Explore</a>
            </div>
        </div>
</div>
</body>
</html>
<?php
echo "<br>";
require_once "footer.php";
?>