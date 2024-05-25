<?php
require('./code/connect.php');

if (isset($_GET["id"])) {
  $id = $_GET["id"];

  $sel = $con->prepare("SELECT * FROM exam WHERE id=$id");


  $sel->execute();

  $Exam = $sel->fetch();

  $c = $sel->rowCount();

  if ($c === 0) {
    session_start();

    $_SESSION["error"] = '<div class="alert alert-danger" role="alert">
      sorry , there is no items in this category
    </div>';
  }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">

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
  <link rel="stylesheet" href="css/department.css">


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
            <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="services.php">services</a>
          </li>

          </li>


        </ul>

      </div>
    </div>
  </nav>




  <div class="serv text-center">
    <div class="over"></div>
    <div class="container">
      <h2 class="h1   wow bounceInLeft">

        Examination
      </h2>
    </div>
  </div>





  <div class="servs wow bounceInRight">
    <div class="container">
      <h2 class="h1 text-center"> Examination Details </h2>
      <p class="lead text-center">
        Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.
      </p>

      <div class="left1">
        <ul class="list-unstyled">
          <li class="active" data-choose="dental"> About Doctor </li>
          <li data-choose="Neurology"> About Instructor </li>
          <li data-choose="Medicine"> About Session </li>
          <li data-choose="Traumatology"> About Exam </li>
          <li data-choose="Cardiology" id="openCam"> Open Camera </li>
        </ul>
      </div>

      <div class="right1">
        <div class="chos active" id="dental">
          <div class="txt">
            <h2 class="h2">Doctor Name : <?php echo $Exam['doctor_name'] ?></h2>
            <p class="lead1">
              Doctor Email : <?php echo $Exam['doctor_email'] ?>
            </p>
            <p class="lead2">
              Doctor Subject : <?php echo $Exam['doctor_subject'] ?> </p>
          </div>

        </div>


        <div class="chos" id="Neurology">
          <div class="txt">
            <h2 class="h2"> First Instructor <?php echo $Exam['Inst_Name1'] ?> </h2>
            <p class="lead1">
              Second Instructor <?php echo $Exam['Inst_Name2'] ?>
            </p>
            <p class="lead2">
              Third Instructor <?php echo $Exam['Inst_Name3'] ?> </p>
          </div>

        </div>


        <div class="chos" id="Medicine">
          <div class="txt">
            <h2 class="h2"> Session Name <?php echo $Exam['section_name'] ?> </h2>

          </div>

        </div>

        <div class="chos" id="Traumatology">
          <div class="txt">
            <h2 class="h2">Exam Name <?php echo $Exam['exam_name'] ?> </h2>
            <p class="lead1">
              Exam Date <?php echo $Exam['exam_date'] ?>
            </p>
            <p class="lead2">
              Exam Time <?php echo $Exam['exam_time'] ?>
            </p>
          </div>

        </div>

        <div class="chos" id="Cardiology">
          <div class="txt">
            <video id="webcam" width="640" height="480" autoplay></video>

            <a href=""> </a>
          </div>

        </div>


        <div class="chos" id="Pediatric">
          <div class="txt">
            <h2 class="h2">Impedit facilis occaecati odio neque aperiam sit 6</h2>
            <p class="lead1">
              Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut
            </p>
            <p class="lead2">
              Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae
            </p>
          </div>

        </div>
      </div>



    </div>
  </div>






  <div class="back">
    <h2 class="h1  wow bounceInLeft" data-wow-duration="1.5s">
      We are pleased to offer you A new Way <span> For E-Learning</span>
    </h2>



  </div>




  <!-- start of footer -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 wow bounceInLeft">
          <img src="images/logo.png" alt="">
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
  <script src="java/bootstrap.min.js"></script>
  <script src="java/wow.min.js"></script>
  <script src="java/java1.js"> </script>
  <script src="java/dep.js"></script>
  <script>
    const webcam = document.getElementById('webcam');
    const openCam = document.getElementById('openCam');

    openCam.onclick = function() {
      if (navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({
            video: true
          })
          .then((stream) => {
            webcam.srcObject = stream;
          })
          .catch((error) => {
            console.error('Error accessing webcam:', error);
          });
      } else {
        console.error('getUserMedia not supported in this browser.');
      }
    }
  </script>
</body>

</html>