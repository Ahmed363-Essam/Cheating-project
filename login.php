<?php

require('./code/connect.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST["login"])) {

    $Email = filter_var($_POST["Email"]);
    $Password = md5($_POST["password"]);

    $sel = $con->prepare("SELECT * FROM `admin` WHERE Email=:Email AND Password=:Password");

    $sel->bindParam("Email", $Email);
    $sel->bindParam("Password", $Password);

    $sel->execute();





    $count = $sel->rowCount();



    if ($count == 1) {

      $fet = $sel->fetch();
      $_SESSION["Email"] = $fet["Email"];
      $_SESSION["id"] = $fet["id"];

      header("Location:dashboard/ShowSection.php");
    } else {
      echo '<div class="alert alert-danger text-center" role="alert"> please , enter the name again or reset password </div>';
    }
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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home1.css">

  <link rel="stylesheet" href="css/login.css">



</head>

<body>

  <!--
  <div class="load">
    <img src="../images/493a4eb8d3ac129972f68cb87fa612a7.gif" alt="">
  </div>
  -->

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

  <div class="login">

    <div class="header1"> </div>

    <div class="form">
      <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="email" name="Email" class="form-control a1" id="inputEmail3">

            <p> not allowed to enter more than 25 characters </p>
            <span class="star1"> * </span>
          </div>
          <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="password" name="password" class="form-control s2" id="inputPassword3">
            <p> not allowed to enter more than 25 characters </p>
            <span class="star1"> * </span>
          </div>
          <i class="fa fa-unlock-alt" aria-hidden="true"></i>
        </div>




        <div class="form-group row text-center">
          <div class="col-sm-12">
            <a href="signup.php" class="btn btn-primary b1">Sign up</a>
            <button type="submit" name="login" class="btn btn-primary b2">log in</button>
          </div>


      </form>
    </div>
  </div>









  <script src="java/jquery-1.12.4.min (1).js">

  </script>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script src="java/bootstrap.min.js"></script>


  <script src="java/login.js"></script>

</body>

</html>