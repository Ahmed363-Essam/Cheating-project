<?php

require('./code/connect.php');



$err = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (isset($_POST["add"])) {

    try {
      $First_name = filter_var($_POST["First_name"],  FILTER_SANITIZE_STRING);
      $Last_name = filter_var($_POST["Last_name"], FILTER_SANITIZE_STRING);

      $Email = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);
      $Phone = filter_var($_POST["Phone"], FILTER_SANITIZE_STRING);

      $Password = md5($_POST["Password"]);




      if (strlen($First_name) < 4) {
        $err[] = '<div class="alert alert-danger text-center" role="alert"> the first name cannot be less than 15 </div>';
      }

      if (empty($First_name)) {
        $err[] = '<div class="alert alert-danger text-center" role="alert">  the first name cannot be empty </div>';
      }

      if (strlen($Last_name) < 4) {
        $err[] = '<div class="alert alert-danger text-center" role="alert">  the last name cannot be less than 15 </div>';
      }

      if (empty($Last_name)) {
        $err[] = '<div class="alert alert-danger text-center" role="alert"> the last name cannot be empty </div>';
      }


      if (strlen($Email) < 4) {
        $err[] = '<div class="alert alert-danger text-center" role="alert">  the email  cannot be less than 15 </div>';
      }

      if (empty($Email)) {
        $err[] = '<div class="alert alert-danger text-center" role="alert">  the email  cannot be empty </div>';
      }




      if (empty($Phone)) {
        $err[] = '<div class="alert alert-danger text-center" role="alert"> the first name cannot be empty </div>';
      }


      if (strlen($Password) < 4) {
        $err[] = '<div class="alert alert-danger text-center" role="alert">  the password cannot be less than 15 </div>';
      }

      if (empty($Password)) {
        $err[] = '<div class="alert alert-danger text-center " role="alert">  the first password cannot be empty </div>';
      }





      if (empty($err)) {

        $sel = $con->prepare("SELECT * FROM `admin` WHERE Email=:Email");

        $sel->bindParam("Email", $Email);

        $sel->execute();

        $count = $sel->rowCount();


        if ($count === 1) {
          $_SESSION["exist"] = '<div class="alert alert-danger" role="alert"> the email exist </div>';

        } else {
          $ins = $con->prepare("INSERT INTO `admin`(First_name,Last_name,Email,Phone,Password) VALUE(:First_name,:Last_name,:Email,:Phone,:Password)");

          $ins->bindParam("First_name", $First_name);
          $ins->bindParam("Last_name", $Last_name);
          $ins->bindParam("Email", $Email);
          $ins->bindParam("Phone", $Phone);
          $ins->bindParam("Password", $Password);


          if ($ins->execute()) {

            header('Location: login.php');
            exit();
          }
        }
      }
    } catch (\Exception $e) {
      //throw $th;
      echo $e->getMessage();
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
  <link rel="stylesheet" href="css/signup.css">


</head>

<body>






  <div class="sign">
    <div class="header2"> </div>

    <div class="upper text-center">
   
      <?php


      foreach ($err as $e) {
        echo $e;
      }

      if (isset($_SESSION["exist"])) {
        echo $_SESSION["exist"];
        unset($_SESSION["exist"]);
      }

      if (isset($_SESSION["added"])) {
        echo $_SESSION["added"];

        unset($_SESSION["added"]);
      }



      ?>

    </div>


    <div class="form">
      <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <div class="form-row">
          <div class="col-md-6 mb-3">

            <input type="text" class="form-control" id="validationDefault01" name="First_name" placeholder="First Name" required>
          </div>
          <div class="col-md-6 mb-3">

            <input type="text" class="form-control" id="validationDefault02" name="Last_name" placeholder="Last Name" required>
          </div>
        </div>


        <div class="form-row">
          <div class="col-md-12 mb-3">

            <input type="email" class="form-control" id="validationDefault01" name="Email" placeholder="email" required>
          </div>
          <div class="col-md-12 mb-3">

            <input type="password" class="form-control" id="validationDefault02" name="Password" placeholder="password" required>
          </div>
        </div>


        <div class="form-row">
          <div class="col-md-12 mb-6">

            <input type="text" class="form-control" id="validationDefault01" name="Phone" placeholder="phone" required>
          </div>

        </div>


        <button class="btn btn-primary" type="submit" name="add" style="margin-left: 40%;"> create an email </button>
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