




 <?php








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
					<h3 align="center"> View All Users</h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-striped">
                                        <thead>
                                            <tr>
                                               
                                                <th class=" ps-2" style="width: 20px;">Name</th>
                                                <th class=" ps-2" style="width: 20px;">Company <br>Name</th>
                                                <th class=" ps-2" style="width: 20px;">Email </th>
                                                <th class=" ps-2" style="width: 20px;">Password</th>
                                                <th class=" ps-2" style="width: 20px;"> Zoom</th>
                                                <th class=" ps-2" style="width: 20px;"> Phone</th>
                                                <th class=" ps-2" style="width: 20px;"> Department</th>
                                                <th class=" ps-2" style="width: 20px;"> Role</th>
                                                <th class=" ps-2" style="width: 20px;"> BirthDay</th>
                                                <th class=" ps-2" style="width: 20px;"> Country</th>
                                                <th class=" ps-2" style="width: 20px;"> City</th>
                                                <th class=" ps-2" style="width: 20px;"> Edit/Del</th>
                                            </tr>
                                        </thead>
                                        <tbody id="customers">
										
											<?php	
					
				
		
$sqll ="SELECT * FROM users WHERE DEL='0'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
	  ?>
	  
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
                                            <tr class="btn-reveal-trigger">
                                               
                                                   <td><?php echo $roww["name"];?></td>
                        <td><?php echo $roww["company"];?></td>
						<td><?php echo $roww["email"];?></td>
                        <td><?php echo $roww["password"];?></td>
                        <td><?php echo $roww["zoom"];?></td>
						 <td><?php echo $roww["phone"];?></td>
						  <td><?php echo $roww["department"];?></td>
						   <td><?php echo $roww["role"];?></td>
						    <td><?php echo $roww["birthday"];?></td>
							 <td><?php echo $roww["country"];?></td>
							  <td><?php echo $roww["city"];?></td>
                       
                                                <td class="py-2 text-end" >
                                                    <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-bs-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item" href="update_user.php?dan=<?php echo $roww['id'];?>">Edit</a><a class="dropdown-item text-danger" href="del.php?iduser=<?php echo $roww['id'];?>&tbuser=users">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr> 
                                               
<?php
}}
?>                                        </tbody>
                                    </table>
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
<?php


 ?>