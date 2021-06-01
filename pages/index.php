<?php
include('../config/dbconn.php');
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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#Event">Event</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <a href="user_login_page.php" class="get-started-btn scrollto">log In</a>

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>Plan. Make. Happiness.</h1>
      <h2>Life is an event. Make it memorable.</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-simple-smile"></i>
                  <span data-toggle="counter-up">65</span>
                  <p>Happy Clients</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-document-folder"></i>
                  <span data-toggle="counter-up">85</span>
                  <p>Event</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up">12</span>
                  <p>Years of experience</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-award"></i>
                  <span data-toggle="counter-up">15</span>
                  <p>Awards</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <img src="content/img/about_1.jpg" class="img-fluid" alt="">

          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>Your occasion deserves our careful planning.</h3>
            <p class="font-italic">
             In a period where we are progressively overwhelmed with data and it’s trying to get a message over, We adopts an insightful and aesthetic strategy to create critical encounters that work up feelings, discussions, and shareable minutes.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Selection of right Venue is vital.</li>
              <li><i class="bx bx-check-double"></i> Draft a plan and follow the timeline.</li>
              <li><i class="bx bx-check-double"></i> Understand the purpose of the Event.</li>
              
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="content/img/about-boxes-1.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-brush-4-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Mission</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="content/img/about-boxes-2.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-calendar-check-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Plan</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="content/img/about-boxes-3.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-movie-2-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Vision</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet. </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Boxes Section -->


        <!-- ======= Event Section ======= -->
    <section id="Event" class="about-boxes">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Event</h2>
          <p>Check our Event</p>
        </div><ul>
                    <?php
                        $query = "SELECT * FROM event ORDER BY event_name ASC";
                        $result = mysqli_query($dbconn,$query);
                        while($res = mysqli_fetch_array($result)) {  
                            $event_id=$res['event_id'];
                        
                    ?>
                    
        <div class="row">
          <div class=".col-6 .col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <?php if($res['event_img1'] != ""): ?>
                                <img src="../uploads/<?php echo $res['event_img1']; ?>" width="300px" height="200px">
                                <?php else: ?>
                                <img src="../uploads/default.png" width="300px" height="200px">
                                <?php endif; ?>
              <div class="card-body">
                <h5 class="card-title"><?php echo $res['event_name'];?></h5>
                <p class="card-text"><a title="Click for more details!" href="event_details.php?event_id=<?php echo $res['event_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View</a></p>
              </div>
            </div>
            <?php }?> 
          </div>
        </div>
                    </ul>

                  </div>
    </section><!-- End Event Section -->

    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Portfolio</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-md-10 portfolio-item filter-app">
        <div class='col-md-8'>
        
                      <?php
                        $query = "SELECT * FROM products ORDER BY prod_name ASC";
                        $result = mysqli_query($dbconn,$query);
                        while($res = mysqli_fetch_array($result)) {  
                            $prod_id=$res['prod_id'];
                        
                    ?>     
              
                <div class='panel-body' >
                  <?php if($res['prod_pic1'] != ""): ?>
                                <img src="../uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="200px">
                                <?php else: ?>
                                <img src="../uploads/default.png" width="300px" height="200px">
                                <?php endif; ?>
                </div>

              <?php }?>
         
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Portfolio Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>Mumbai, India, 000000</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>abc@gmail.com.com<br>contactus@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+91 1234567890<br>+91 9876543212</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">

          <?php
            // including the database connection file
            include("../config/dbconn.php");
            if(isset($_POST['submit']))
            {   
                //$id=$_POST['id'];
                $name=$_POST['name'];
                $email=$_POST['email'];
                $message=$_POST['message'];

                // checking empty fields
              if(empty($name) || empty($email) || empty($message)) {    
                      
                  if(empty($name)) {
                      echo "<font color='red'>Firstname field is empty!</font><br/>";
                  }

                  if(empty($email)) {
                      echo "<font color='red'>Middlename field is empty!</font><br/>";
                  }
                  
                  if(empty($message)) {
                      echo "<font color='red'>Lastname field is empty!</font><br/>";
                  }
                  } else {    
        //updating the table
        $query = "INSERT INTO contact (name, email, message) 
                VALUES ('$name','$email','$message')";

        $result = mysqli_query($dbconn,$query);
        
  
        
    }
}
?>

          <form action="#" method="post" role="form">
            <div class="form-row">
              <div class="col-md-5 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-5 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="text-center"><button type="submit" id="submit" name="submit" class="bbtn btn-primary btn-round btn-lg btn-block">Send Message</button></div>
          </form>
        </div>

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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

  <!-- Template Main JS File -->
  <script src="content/js/main.js"></script>

</body>

</html>