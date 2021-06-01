<?php
    session_start();

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_login_page.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event Management</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Favicons -->
  <link href="content/img/favicon.png" rel="icon">
  <link href="content/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="content/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="content/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="content/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="content/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="content/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="content/vendor/owl.carousel/content/owl.carousel.min.css" rel="stylesheet">
  <link href="content/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="content/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Event Management</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="content/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>

              <li class="drop-down"><a class="nav-link" href="#" onclick="scrollToDownload()">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>
                                <?php
                                 include('../config/dbconn.php');
                                 $query=mysqli_query($dbconn,"SELECT * FROM `users` WHERE user_id='".$_SESSION['id']."'");
                                 $row=mysqli_fetch_array($query);
                                 echo ''.$row['firstname'].'';
                                ?>
                            </p>
                        </a>
                <ul>
                  <li><a class="nav-link" href="user_cart.php" onclick="scrollToDownload()">
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p>Book Event</p>
                        </a></li>
                  <li><a href="logout.php" class="nav-link" href="" onclick="scrollToDownload()">
                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                            <p>Logout</p>
                        </a></li>
                </ul>
              </li>
              
            </ul>
          </li>

        </ul>
      </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>Plan. Make. Happiness.</h1>
      <h2>Life is an event. Make it memorable.</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

<!-- Book Event-->

                      <div class="tab-pane  active" id="">
                        <ul class="thumbnails">
                        <?php
                        $query = "SELECT * FROM products ORDER BY prod_name ASC";
                        $result = mysqli_query($dbconn,$query);
                        while($res = mysqli_fetch_array($result)) {  
                            $prod_id=$res['prod_id'];
                        
                    ?>   
                        <div class="row-sm-3">
                            <div class="thumbnail">
                                <?php if($res['prod_pic1'] != ""): ?>
                                <img src="../uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="200px">
                                <?php else: ?>
                                <img src="../uploads/default.png" width="300px" height="200px">
                                <?php endif; ?>
                            <div class="caption">
                              <h5><b><?php echo $res['prod_name'];?></b></h5>
                              <h6><a class="btn btn-success btn-round" title="Click for more details!" href="user_product_details.php?prod_id=<?php echo $res['prod_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View</a></h6>
                            </div>

                            </div>
                          <hr color="orange">
                          </div>
                                 
                    <?php }?> 

                          </ul>
                      </div>

    



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="footer-info">
              <h3>Event Management</h3>
              <p>
                Mumbai <br>
                India<br><br>
                <strong>Phone:</strong> +91 1234567898<br>
                <strong>Email:</strong> contactus@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#Event">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#Contact">contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Events</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Wedding</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Birthday Party</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Baby shower</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Opening Ceremony</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Award Show</a></li>
            </ul>
          </div>

          <!--<div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>-->

        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="content/vendor/jquery/jquery.min.js"></script>
  <script src="content/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="content/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="content/vendor/php-email-form/validate.js"></script>
  <script src="content/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="content/vendor/counterup/counterup.min.js"></script>
  <script src="content/vendor/venobox/venobox.min.js"></script>
  <script src="content/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="content/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="content/vendor/aos/aos.js"></script>
  <script type="text/javascript">
        function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
  </script>

  <!-- Template Main JS File -->
  <script src="content/js/main.js"></script>

</body>

</html>