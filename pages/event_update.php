<?php
// including the database connection file
include("../config/dbconn.php");
if(isset($_POST['update']))
{   
    $event_id = mysqli_real_escape_string($dbconn, $_POST['event_id']);
    $event_name = mysqli_real_escape_string($dbconn, $_POST['event_name']);
    $event_desc = mysqli_real_escape_string($dbconn, $_POST['event_desc']);
 

    // checking empty fields
    if(empty($event_name) || empty($event_desc)) {    
            
        if(empty($event_name)) {
            echo "<font color='red'>Event Name field is empty!</font><br/>";
        }
        
        if(empty($event_desc)) {
            echo "<font color='red'>Description field is empty!</font><br/>";
        }
 
       
    } else {    





        //updating the table
        $query = "UPDATE event SET event_name='$event_name',event_desc='$event_desc' WHERE event_id=$event_id";
        $result = mysqli_query($dbconn,$query);
        
        if($result){  
            //redirecting to the display page. In our case, it is index.php
        header("Location: admin_panel.php");
        }
        
    }
}
?>






<?php
//getting id from url
$id=isset($_GET['event_id']) ? $_GET['event_id'] : die('ERROR: Record ID not found.');
//selecting data associated with this particular id
$result = mysqli_query($dbconn, "SELECT * FROM event WHERE event_id=$id");
while($res = mysqli_fetch_array($result))
{
    $event_name = $res['event_name'];
    $event_desc = $res['event_desc'];

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

    <div class="panel panel-success panel-size-custom">
  <div class="panel-heading"><h3>Update Event</h3></div>
  <div class="panel-body">
    <form action="event_update.php" method="post">
        <div class="form group">
            <input type="hidden" class="form-control" id="event_id" name="event_id" value=<?php echo $_GET['event_id'];?>>
            <label for="event_name">Event name:</label>
            <input type="text" class="form-control" id="event_name" name="event_name" value="<?php echo $event_name;?>">
            <label for="event_desc">Description:</label>
            <input type="text" class="form-control" id="event_desc" name="event_desc" value="<?php echo $event_desc;?>">
            

                </div>            
             </div>
            </div>
            <br>
            <div class="form group">
                <button type="submit" class="btn btn-success btn-round" id="submit" name="update">
                    <i class="now-ui-icons ui-1_check"></i> Update Event
                </button>
            </div>
    </form>
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