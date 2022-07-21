

 <?php


require_once "db_connection.php";






?>







<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'headmain.php';?>
<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!-- Daterange picker -->
    <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
	
    <!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
	<link href="../icon.css?family=Material+Icons" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
 <!--*******************
        Preloader start
    ********************-->
   <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
<?php include('header.php');

if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}


?>
     <!--**********************************
            Nav header end
        ***********************************-->
    <!--**********************************
            Sidebar start
        ***********************************-->

    <!--**********************************
            Sidebar end
        ***********************************-->
    

    		
		<!--**********************************
            Content body start
        ***********************************-->
 <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
				    
					<h3 align="center"> View All Customers <h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    
                                    
                                    
                                    
                                    
                                
                 <style>
div.gallery {
  position:relative;
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  min-width: 200px;
   max-width: 200px;
   min-height: 250px;
   max-height: 250px;
   


    display: flex;
  justify-content: center;
  align-items: center;
}

 

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  margin-top:-50%;
  width: 100px;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

.pp{
  position:absolute;
  bottom:0;
  right:auto;
  left:auto;
  
   flex-shrink: 0;
  
  


  
   
    
     
  
}
.pin{
    position: absolute;
    right:0;
    top:0;
  
}
</style>


<style>
    .containeer {
  
  position: relative;
}

.xe {
    position: absolute;
    background: red;
    color: white;
    top: -10px;
    right: -10px;
    z-index:3;
}
</style>

<div align="center">
    
    
    
    
    		<?php	
					
				
		
$sqlla ="SELECT * FROM customer WHERE DEL='0'";
		$resultta = $conn->query($sqlla);

 
 
	
	
if ($resultta->num_rows > 0) {
  // output data of each row
  while($rowwa = $resultta->fetch_assoc()) {
	  ?>
  
 
<div onclick="location.href='update_customers.php?dan=<?php echo $rowwa['id'];?>';" style="cursor: pointer;" align="center" class="containeer gallery">
 <a href="del.php?iduser=<?php echo $rowwa['id'];?>&tbuser=customer"><button class= "xe">
            X
        </button></a>


    <img src="Customer Images/<?php echo $rowwa["image"];?>" alt="">
 
 <div class="pp">
 <i style="color:white;" class="fa fa-user" aria-hidden="true"></i><br/><h3 align="center" class="f" style="font-size:100%;"><?php echo $rowwa["name"];?></h3>

 <a href="tel:<?php echo $rowwa["phone"];?>"><i class="fa fa-phone" aria-hidden="true"></i><br/><h3 align="center" class="f" style="font-size:100%;"> <?php echo $rowwa["phone"];?></h3></a>
<a href="mailto:<?php echo $rowwa["email"];?>"> <i class="fa fa-envelope" aria-hidden="true"></i><br/><h3 align="center" class="f" style="font-size:100%;"> <?php echo $rowwa["website"];?></h3></a>
 </div>
 
  
</div>



  <?php
}}
?>
                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
     <!--**********************************
            Content body end
        ***********************************-->



    	
        <!--**********************************
            Footer start
        ***********************************-->
       <?php  //include 'footer.php'; ?>
        <!--**********************************
            Footer end
        ***********************************-->
    
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
 


    <!-- Daterangepicker -->
    <!-- momment js is must -->
    
    <!-- clockpicker -->
    <script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>

	

    
	
</body>
</html>
<?php


 ?>