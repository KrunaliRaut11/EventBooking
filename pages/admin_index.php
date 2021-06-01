<?php
    session_start();

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:admin_signup.php');
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
          <li><a class="nav-link" href="admin_panel.php" onclick="scrollToDownload()">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>
                                <?php
                                 include('../config/dbconn.php');
                                 $query=mysqli_query($dbconn,"SELECT * FROM `admin` WHERE user_id='".$_SESSION['id']."'");
                                 $row=mysqli_fetch_array($query);
                                 echo 'Admin '.$row['firstname'].'';
                                ?>
                            </p>
                        </a></li>
                        

          <li> <a class="nav-link" href="orders.php">
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p>Orders</p>
                        </a></li>
          <li>                        <a href="logout.php" class="nav-link" href="" onclick="scrollToDownload()">
                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                            <p>Logout</p>
                        </a></li>


              

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
                
              </div>
            </div>
            <?php }?> 
          </div>
        </div>
                    </ul>

                  </div>
    </section><!-- End Event Section -->  

    

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