<?php
include('header.php');
?>
<html lang="utf-8">
  <head>
    <title>CentralCarcare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">




    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    
  </head>
  <style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Kanit);
  body{
        font-size: 19px;
		font-family: 'Kanit', sans-serif;
		background: #F8F8FF;
      }

    .btn {
      font-size: 40px;
      margin-left: 10%;
      border: 2px solid white;
    }
      
  .container {
      position: relative;
  }

  @media screen and (max-width: 600px) {
  .col-25, .col-75, .btn  {
    width: 100%;
    margin-top: 10px;
    margin-right: 0%;
  }
}
  </style>
  <body>
  <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">         
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
              <h1><span class="typed-words"></span></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" width="100%" height="auto" src="image/createweb/ca1.jpg" alt="First slide">
      <div class="carousel-caption">
        <a href="register.php" class="btn btn-primary">สมัครสมาชิก</a>
        <a href="login.php"><button type="button" class="btn btn-outline-light">เข้าสู่ระบบ</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" width="100%" height="auto" src="image/createweb/ca2.jpg" alt="Second slide">
      <div class="carousel-caption">
        <a href="register.php" class="btn btn-primary">สมัครสมาชิก</a>
        <a href="login.php" class="btn btn-outline-light">เข้าสู่ระบบ</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" width="100%" height="auto" src="image/createweb/ca3.jpg" alt="Third slide">
      <div class="carousel-caption">
        <a href="register.php" class="btn btn-primary">สมัครสมาชิก</a>
        <a href="login.php" class="btn btn-outline-light">เข้าสู่ระบบ</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </body>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Welcome everybody","to SwapThings."],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
</html>