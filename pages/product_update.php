<?php
// including the database connection file
include("../config/dbconn.php");
if(isset($_POST['update']))
{   
    $id = mysqli_real_escape_string($dbconn, $_POST['prod_id']);
    $prod_name = mysqli_real_escape_string($dbconn, $_POST['prod_name']);
    $prod_desc = mysqli_real_escape_string($dbconn, $_POST['prod_desc']);
    $prod_qty = mysqli_real_escape_string($dbconn, $_POST['prod_qty']);
    $prod_cost = mysqli_real_escape_string($dbconn, $_POST['prod_cost']); 
    $prod_price = mysqli_real_escape_string($dbconn, $_POST['prod_price']); 

    $event = mysqli_real_escape_string($dbconn, $_POST['event']);
    $prod_serial = mysqli_real_escape_string($dbconn, $_POST['prod_serial']);

    // checking empty fields
    if(empty($prod_name) || empty($prod_desc) || empty($prod_cost) || empty($prod_price) || empty($event) || empty($prod_serial)) {    
            
        if(empty($prod_name)) {
            echo "<font color='red'>Product name field is empty!</font><br/>";
        }
        
        if(empty($prod_desc)) {
            echo "<font color='red'>Product description field is empty!</font><br/>";
        }

        if(empty($prod_cost)) {
            echo "<font color='red'>Product cost field is empty!</font><br/>";
        }
        
        if(empty($prod_price)) {
            echo "<font color='red'>Product price field is empty!</font><br/>";
        }    

        if(empty($event)) {
            echo "<font color='red'>event field is empty!</font><br/>";
        }    

        if(empty($prod_serial)) {
            echo "<font color='red'>Serial number field is empty!</font><br/>";
        } 
       
    } else {    
        //updating the table
        $query = "UPDATE products SET prod_name='$prod_name',prod_desc='$prod_desc',prod_cost='$prod_cost',prod_price='$prod_price',
                event='$event',prod_serial='$prod_serial' WHERE prod_id=$id";
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
$id=isset($_GET['prod_id']) ? $_GET['prod_id'] : die('ERROR: Record ID not found.');
//selecting data associated with this particular id
$result = mysqli_query($dbconn, "SELECT * FROM products WHERE prod_id=$id");
while($res = mysqli_fetch_array($result))
{
    $prod_name = $res['prod_name'];
    $prod_desc = $res['prod_desc'];
    $prod_qty = $res['prod_qty'];
    $prod_cost = $res['prod_cost'];
    $prod_price = $res['prod_price'];

    $event = $res['event'];
    $prod_serial = $res['prod_serial'];
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
                      <h2>Purchased Product Information</h2>
                      <hr color="orange">
                      <a href='admin_panel.php' class='btn btn-warning btn-round'>Back to Index</a>
                <br>
                <div class="col-md-12">

    <div class="panel panel-success panel-size-custom">
  <div class="panel-heading"><h3>Update Product</h3></div>
  <div class="panel-body">
    <form action="product_update.php" method="post">
        <div class="form group">
            <input type="hidden" class="form-control" id="prod_id" name="prod_id" value=<?php echo $_GET['prod_id'];?>>
            <label for="prod_name">Serial number:</label>
            <input type="text" class="form-control" id="prod_serial" name="prod_serial" value="<?php echo $prod_serial;?>">
            <label for="prod_name">Product Name:</label>
            <input type="text" class="form-control" id="prod_name" name="prod_name" value="<?php echo $prod_name;?>">
            <label for="prod_desc">Product Description:</label>
            <input type="text" class="form-control" id="prod_desc" name="prod_desc" value="<?php echo $prod_desc;?>">
            <label for="prod_cost">Product Cost (Rs.):</label>
            <input type="text" class="form-control" id="prod_cost" name="prod_cost" value="<?php echo $prod_cost;?>">
            <label for="prod_price">Product Price (Rs.):</label>
            <input type="text" class="form-control" id="prod_price" name="prod_price" value="<?php echo $prod_price;?>">
            


                    <div class="form-group">
                        <label for="event_name">event:</label>
                        <div class="input-group">
                            <select class="form-control" id="event" name="event" required>
                              <?php
                              include('../config/dbconn.php');
                              $query=mysqli_query($dbconn,"SELECT event_name FROM event ORDER BY event_name ASC")or die(mysqli_error());
                              while($row=mysqli_fetch_array($query)){
                                  ?>
                                <option value="<?php echo $row['event_name'];?>"><?php echo $row['event_name'];?></option>
                                <?php }?>
                            </select>
                        </div>


                        <label for="prod_qty" id="prod_qty" name="prod_qty">Available Quantity: &nbsp &nbsp <?php echo $prod_qty;?> Pcs.</label>
                    </div>
                </div>            
             </div>
            </div>
            <br>
            <div class="form group">
                <button type="submit" class="btn btn-success btn-round" id="submit" name="update">
                    <i class="now-ui-icons ui-1_check"></i> Update Product
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