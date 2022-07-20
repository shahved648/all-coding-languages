
<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width , initial-scale = 1.0">
	<title>ved creation</title>
	<link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>	
</head>
<body>
	<header></header>
	<main>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">VED CREATION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="service.php">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="user-info.php">Contact</a>
      </li>
  </ul>
  </div>
</nav>
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
      <img src="./images/banner.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="./images/chicago.jpg" alt="Chicago" width="1100" height="500"><div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div> 

    </div>
    <div class="carousel-item">
      <img src="./images/ny.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Newyork</h3>
        <p>We love the Big Apple!</p>
      </div> 
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
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>

  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="./images/crusher.jpg" alt="" class="img-fluid about-img">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">I AM VED CREATION</h2>
      <p class="py-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
      <a href="about.php" class="btn btn-success">Read More</a>
    </div>
  </div>
</div>
</section>
<div class="service">
  <div class="max-width">
    <h1>Our services</h1>
    <div class="content">
      <div class="card">
        <div class="box">
        <i class="fa fa-desktop"></i>
        <h3>Web Developement</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
      </div>
      <div class="card">
        <div class="box">
        <i class="fa fa-code"></i>
        <h3>Graphic Design</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
      </div>
      <div class="card">
        <div class="box">
        <i class="fa fa-mobile"></i>
        <h3>App Developement</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="user-info.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>E-mail Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>

</section>

</main>
<footer>
  <p class="p-3 bg-dark text-white text-center">@VED CREATION Production</p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html> 