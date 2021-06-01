<?php
    session_start();
    include('../config/dbconn.php');

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header('location:index.php');
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Event Management</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your projects -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>

    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

<body class="index-page sidebar-collapse">

    <!-- End Navbar -->
    <div class="wrapper">

<br>
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                      <h2>Event Information</h2>
                      <hr color="orange">
                      <a href='admin_panel.php' class='btn btn-warning btn-round'>Back to Index</a>
                <br>
                <div class="col-md-12">
               

<?php
// including the database connection file
include("../config/dbconn.php");
if(isset($_POST['submit'])){

    $event_name=$_POST['event_name'];
    $event_desc=$_POST['event_desc'];
    //img

    move_uploaded_file($_FILES["event_img1"]["tmp_name"],"../uploads/" . $_FILES["event_img1"]["name"]);         
    $event_img1=$_FILES["event_img1"]["name"];
    move_uploaded_file($_FILES["event_img2"]["tmp_name"],"../uploads/" . $_FILES["event_img2"]["name"]);         
    $event_img2=$_FILES["event_img2"]["name"];
    move_uploaded_file($_FILES["event_img3"]["tmp_name"],"../uploads/" . $_FILES["event_img3"]["name"]);         
    $event_img3=$_FILES["event_img3"]["name"];

     // checking empty fields
    if(empty($event_name) || empty($event_desc) || empty($event_img1) || empty($event_img2) || empty($event_img3)){    
            
        if(empty($event_name)) {
            echo "<font color='red'>event name field is empty!</font><br/>";
        }
        
        if(empty($event_desc)) {
            echo "<font color='red'>Address field is empty!</font><br/>";
        }

        if(empty($event_img1)) {
            echo "<font color='red'>Picture1 field is empty!</font><br/>";
        }

        if(empty($event_img2)) {
            echo "<font color='red'>Picture2 field is empty!</font><br/>";
        }

        if(empty($event_img3)) {
            echo "<font color='red'>Picture3 field is empty!</font><br/>";
        }   

    } else {    

        $query = "INSERT INTO `event`(`event_name`, `event_desc`, `event_img1`, `event_img2`, `event_img3`) VALUES ('$event_name','$event_desc','$event_img1','$event_img2','$event_img3')";  

        $result = mysqli_query($dbconn,$query);
        
        if($result){
            //redirecting to the display page. In our case, it is index.php
        header("Location:admin_panel.php");
        }
        
    }
}

?>



<div class="panel panel-success panel-size-custom">
          <div class="panel-heading"><h3>Add Product event</h3></div>

          <div class="panel-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form group">
                    <label for="event_name">Event Name:</label>
                    <input type="text" class="form-control" id="event_name" name="event_name" placeholder="event Name"/>
                    <label for="event_desc">Description:</label>
                    <input type="text" class="form-control" id="event_desc" name="event_desc" placeholder="Description"/>

                        <label for="event_img1">Picture 1:</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="event_img1" name="event_img1">  
                        </div>
                        <label for="event_img2">Picture 2:</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="event_img2" name="event_img2">  
                        </div>
                        <label for="event_img3">Picture 3:</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="event_img3" name="event_img3">  
                        </div>
                </div>
                <br>

                <div class="form group">
                    <button type="submit" class="btn btn-success btn-round" id="submit" name="submit">
                    <i class="now-ui-icons ui-1_check"></i> Update event
                    </button> 
                </div>
            </form>
          </div>
        </div> 
        <br> 
    </div>
</div>
</div>
<footer class="footer" data-background-color="black">

        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

</html>