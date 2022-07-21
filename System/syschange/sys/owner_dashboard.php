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
<?php  include 'owner_header.php'; 



if ($_SESSION['role']=="customer"){
header("Location: customer_dashboard.php");
}

else if ($_SESSION['role']=="partner"){
header("Location: partner_dashboard.php");
}

else if ($_SESSION['role']=="staff"){
header("Location: staff_dashboard.php");
}


else if ($_SESSION['role']=="owner"){
header("Location: owner_dashboard.php");
}

else if ($_SESSION['role']=="sales"){
header("Location: sales_dashboard.php");
}

else if ($_SESSION['role']=="accounts"){
header("Location: accounts_dashboard.php");
}




?>
     <!--**********************************
            Nav header end
        ***********************************-->
   
    

    		
		<!--**********************************
            Content body start
        ***********************************-->
		 <div class="content-body">

            <div class="container-fluid">
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            </div>
        </div>
     <!--**********************************
            Content body end
        ***********************************-->



    	
        <!--**********************************
            Footer start
        ***********************************-->
       <?php  include 'footer.php'; ?>
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
