<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>Repair Cafe</title>
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top" style="background-color: rgba(0,0,0,0.3);">
    <a href="index.php" class="navbar-brand" style="font-size: 20px;">Repair Cafe</a>
    <span class="navbar-text font-italic text-light" style="font-size: 14px;">Mangalore's Favourite Repair Center</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu" style="position: relative;left: 434px;">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/repair.jpg);position: relative;bottom: 74px;min-height: 100vh;">
    <div class="myclass mainHeading">
      <h1 class="text-light font-weight-bold">Hi Customer! Welcome to Repair Cafe</h1>
      <p class="font-italic text-light">Mangalore's No.1 and Favourite Repair Center</p>
      <a href="Requester/RequesterLogin.php" class="butt btn mr-4 butt" style="background-color: black;color: white;border: 2px solid;">Login</a>
      <a href="#registration" class="butt btn mr-4 " style="background-color: black;color: white;border: 2px solid;margin-left: -18px;">Sign Up</a>
      <a href="Admin/login.php" class="butt btn mr-4 " style="background-color: black;color: white;border: 2px solid;margin-left: -18px;">Admin Login</a>
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron" style="background-color: black;color: white; position:relative; bottom: 68px;">
      <h3 class="text-center" style="font-weight: bold;">The Story Repair Cafe</h3>
      <p style="text-align: justify;font-style: italic;">
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius repellendus nemo quam amet dolorum rem perferendis voluptatem distinctio voluptatum, saepe cumque ea, in eligendi non nihil totam porro inventore veniam repudiandae! Veritatis repellendus ipsum, quisquam laudantium ducimus distinctio porro labore laboriosam nisi corrupti minima aut? Expedita perferendis deserunt, dicta tenetur laboriosam aut maxime dolor obcaecati iste deleniti voluptatem vitae distinctio odio sit. Sint, earum! Dolor vero officia cupiditate praesentium, error repellendus, quisquam architecto quo voluptate quibusdam veritatis! Molestias, laudantium sit officia expedita eaque consectetur reiciendis vero aperiam doloribus esse commodi fuga temporibus repudiandae unde obcaecati? Odit minima repudiandae accusantium ex?
      </p>

    </div>
  </div>
  <!--Introduction Section End-->


  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->


  <!--Start Contact Us-->
  <div class="container" id="Contact" style="position: relative;top: -117px;">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center" style="position: relative;left: 391px;">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        Repair Cafe Pvt Ltd, <br>
        Mangaladevi Road <br>
        Mangalore - 500005 <br>
        Phone: +9148522334 <br>
        <a href="#" target="_blank">www.repaircafe.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" >
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 text-light"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 text-light"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 text-light"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 text-light"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 text-light"><i class="fab fa-instagram"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->

        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>