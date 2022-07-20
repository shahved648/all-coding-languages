<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Services</title>
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
        <a class="nav-link" href="#">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="user-info.php">Contact</a>
      </li>
  </ul>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>VED CREATION:-)</h1>
    <p>We The most Popular HTML, CSS... Developers like share subscribe:-)</p>
  </div>
</div>
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
</main>
<footer>
  <p class="p-3 bg-dark text-white text-center">@VED CREATION Production</p>
</footer>
	
</body>
</html>