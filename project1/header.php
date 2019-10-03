<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Autoroad</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">            
            <h1 class="mb-3 bread">
            <?php
              $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
              if (strpos($url,'contact.php') !== false) {
                  echo 'Contact';
              } else if (strpos($url,'about.php') !== false){
                  echo 'About us';
              } else if (strpos($url,'rent.php') !== false || strpos($url,'buy.php') !== false){
                  echo 'Choose your car';
              }?></h1>
          </div>
      </div>
    </div>
</section>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href='index.php'>Auto<span>road</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href='index.php' class="nav-link">Home</a></li>
          <li class="nav-item"><a href='about.php' class="nav-link">About</a></li>
          <li class="nav-item"><a href='rent.php' class="nav-link">Rentable cars</a></li>
          <li class="nav-item"><a href='buy.php' class="nav-link">Buyable cars</a></li>
          <li class="nav-item"><a href='contact.php' class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
</nav>