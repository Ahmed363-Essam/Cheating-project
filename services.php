<?php

require('./code/connect.php');
$sel2 = $con->prepare("SELECT * FROM `exam`");
$sel2->execute();

$Exams = $sel2->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <script src="java/html5shiv.min.js"></script>
  <script src="java/respond.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/venobox.min.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/home1.css">
  <link rel="stylesheet" href="css/ser.css">

</head>

<body>

  <div class="load">
  </div>

  <!--  strat of head -->
  <span class="up"> up </span>


  <div class="option">

    <h1> style option </h1>

    <span class="span1"> <i class="fa fa-cog" aria-hidden="true"></i> </span>

    <div class="color">
      <ul>
        <li data-color="#223a66"> </li>
        <li data-color="rgb(17, 109, 189)"> </li>
        <li data-color="#333"> </li>
        <li data-color="blue"> </li>
        <li data-color="blueviolet"> </li>
      </ul>

    </div>



  </div>





  <!--  end of head -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
      <div class="navbar-brand" href="#"><img src="images/logo.png" alt=""></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ahmed" aria-controls="ahmed" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="ahmed">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="services.html">services</a>
          </li>

          </li>


        </ul>

      </div>
    </div>
  </nav>



  <div class="serv text-center">
    <div class="over"></div>
    <div class="container">
      <h2 class="h1  wow bounceInLeft">

        Available Sections
      </h2>
    </div>
  </div>


  <div class="servs">
    <div class="container">
      <h2 class="h1 text-center wow slideInLeft" data-wow-duration="2s"> Current Examination </h2>
      <p class="lead text-center wow slideInRight" data-wow-duration="2s">
        Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.
      </p>


      <div class="row">
        <?php
        foreach ($Exams as $Exam) {
        ?>
          <div class="col-lg-4 col-md-6  wow bounceInDown">
            <a href="departmrnt.php?id=<?php echo $Exam["id"] ?>">
              <div class="item">
                <div class="par4">
                  <h2 class="h2"> Dr :<?php echo $Exam["doctor_name"]; ?> </h2>
                  <p class="leaf">
                    <?php echo $Exam["exam_name"]; ?> Exam - date <span> <?php echo $Exam["exam_date"]; ?> </span> / time <span> <?php echo $Exam["exam_time"]; ?> </span>
                  </p>
                </div>
              </div>
            </a>

          </div>
        <?php
        }

        ?>



      </div>
    </div>
  </div>





  <!-- end statistics section -->
  <!-- end statistics section -->


  <div class="back">
    <div class="over"></div>
    <h2 class="h1  wow bounceInLeft" data-wow-duration="1.5s">
      We are pleased to offer you A new Way <span> For E-Learning</span>
    </h2>



  </div>




  <!-- start of footer -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 wow bounceInLeft">
          <img srimages/logo.png" alt="">
          <p class="lead">
            Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.
          </p>
          <ul class="list-unstyled">
            <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
            <li> <a href=""> <i class="fa fa-youtube" aria-hidden="true"></i> </a> </li>
            <li> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
            <li> <a href=""> <i class="fa fa-github-alt" aria-hidden="true"></i> </a> </li>
          </ul>
        </div>


        <div class="col-lg-2 col-md-6  wow bounceInDown">
          <h2 class="h1"> Department </h2>

          <ul class="list-unstyled a0">
            <li> <i class="fa fa-chevron-right" aria-hidden="true"></i> Surgery </li>
            <li> <i class="fa fa-chevron-right" aria-hidden="true"></i> Wome's Health </li>
            <li> <i class="fa fa-chevron-right" aria-hidden="true"></i> Radiology </li>
            <li> <i class="fa fa-chevron-right" aria-hidden="true"></i> Cardioc </li>
            <li> <i class="fa fa-chevron-right" aria-hidden="true"></i> Medicine </li>
          </ul>
        </div>


        <div class="col-lg-2 col-md-6 a1 wow bounceInUp">
          <h2 class="h1"> Support </h2>

          <ul class="list-unstyled   a0">
            <li> <i class="fa fa-chevron-right" aria-hidden="true"></i> Terms & Conditions </li>
            <li> <i class="fa fa-chevron-right" aria-hidden="true"></i> Privacy Policy </li>
            <li> <i class="fa fa-chevron-right" aria-hidden="true"></i> Company Support </li>
            <li> <i class="fa fa-chevron-right" aria-hidden="true"></i> FAQuestions </li>
            <li> <i class="fa fa-chevron-right" aria-hidden="true"></i> Company Licence </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 wow bounceInRight">
          <h2 class="h1"> Get In Touch </h2>

          <ul class="list-unstyled a0">
            <li> <i class="fa fa-envelope" aria-hidden="true"></i> Support Available for 24/7 </li>

            <li> <i class="fa fa-google" aria-hidden="true"></i> ae676430@gmail.com </li>

            <li> <i class="fa fa-envelope" aria-hidden="true"></i> Support Available for 24/7 </li>

            <li> <i class="fa fa-phone" aria-hidden="true"></i> 01006631236 </li>

          </ul>

        </div>
      </div>
    </div>
  </footer>

  <!-- end of footer -->
  <!-- end of footer -->
  <script src="java/jquery-1.12.4.min (1).js"> </script>
  <script src="java/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="java/venobox.min.js"></script>
  <script src="java/jquery.countTo.js"></script>
  <script src="java/typed.min.js"></script>
  <script src="java/wow.min.js"></script>
  <script src="java/bootstrap.min.js"></script>
  <script src="java/java1.js"> </script>
  <script src="java/ser.js"> </script>

</body>

</html>