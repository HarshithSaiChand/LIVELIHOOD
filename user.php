<?php
session_start();




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LIVELIHOOD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/BD2.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NewBiz - v4.7.0
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="index.html"><font color="red" face="bold" size="8">LIVELIHOOD</font></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="acc1.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">Log out</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

  <!-- ======= Hero Section ======= -->


    <!-- ======= About Section ======= -->
     <section id="about">
      <div class="contaier" data-aos="fade-up">

        <header class="section-header"><br><br><br>
          
          
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <center><h3><?php echo "Hi!"; echo $_SESSION['uname1'] ;?></h3></center>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
           
              <div class="icon"><i class='bi bi-gender-ambiguous' style='color:#ff8800'></i></div>
              <br><h4 class="title"><a href=""><?php echo "Gender: ";  echo $_SESSION['gen1'];?></a></h4>
            </div><br>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class='bi bi-droplet-fill' style='color: red'></i></div>
             <br> <h4 class="title"><a href=""><?php echo "Blood Group: "; echo $_SESSION['bg1'];?></a></h4>
            </div><br>

            

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class='bi bi-envelope' style='color: blue'></i></div>
              <br><h4 class="title"><a href=""></a><?php echo "Mail: "; echo $_SESSION['Mail1'];?></h4>
             </div><br>

             

          </div>

          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="assets/img/B4.jpg" class="img-fluid" alt="">
          </div>
        </div>

        
       
      </div>
    </section>
<!-- End About Section -->

    <!-- ======= Services Section ======= -->
   

    <!-- ======= Why Us Section ======= -->
<!-- End Why Us Section -->

   

 
    <!-- ======= Clients Section ======= -->
   <!-- End Clients Section -->

    <!-- ======= Contact Section ======= -->
 <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>