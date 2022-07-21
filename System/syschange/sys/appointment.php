<?php

session_start();

require_once "db_connection.php";




if (isset($_POST['submit'])) {
	

		
$user = $_POST['user'];
$companyname = $_POST['company'];
$appointment =$_POST['name'];

$date = $_POST['date'];
$time =$_POST['time'];

$clientname =$_POST['clientname'];

$filledby=$_SESSION['user_name'];
		
$sql ="INSERT INTO appointments (appointment, company, date, time,user,clientname) VALUES ('$appointment', '$companyname', '$date', '$time', '$user', '$clientname')";

$result = $conn->query($sql);


if ($result === TRUE) {
    
    
$sqll ="INSERT INTO client_form (appointmentname,filledby) VALUES ('$appointment','$filledby')";

$resultt = $conn->query($sqll);  
    
    
    
    
    
    
    
    
    
 
} else {
 
}


}
?>





<!DOCTYPE html>
<html lang="en">

<head>
<?php include ('headmain.php');?>
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
<?php  include ('header.php');
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
				
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create Appointment</h4>
                            </div>
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#wizard_Service"> 
											<span>1</span> 
										</a></li>
										<li><a class="nav-link" href="#wizard_Time">
											<span>2</span>
										</a></li>
										<li><a class="nav-link" href="#wizard_Payment">
											<span>3</span>
										</a></li>
										
										
										
									</ul>
									<div class="tab-content">
									<form id="regForm" action="#" method="post">
									
										<div id="wizard_Service" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Appointment Subject*</label>
														 <input required  type="text" name="name" class="form-control" placeholder="Enter Appointment Subject..."/>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Enter Client Name</label>
														<input required  type="text" name="clientname" class="form-control" placeholder="Enter Client Name..."/>
													</div>
												</div>
												
												
												
											</div>
										</div>
										<div id="wizard_Time" class="tab-pane" role="tabpanel">
											  <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Company and User
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                       
		
<?php	
		
		
		
$sql ="SELECT * FROM office WHERE DEL='0'";
		$result = $conn->query($sql);

 
 
 ?>
 <select class='form-control' id="first" name="company">
 		<option>----Select Company----</option>
		<?php
	
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
	  
	  
  ?> <option><?php echo $row["companyname"];?></option>
   <?php
   
   
  }
 
$conn->close();
		
	
 
}	
		
?>	

</select>





<select class='form-control' name="user" id="state">
    <option>----Select User----</option>
   </select>
   
   













<script>


jQuery(document).ready(function($) {
    $("#first").on('change', function() {
		
	
		
	
	
		var	compy = $("#first").val();
	
	
	
	  $.ajax({
              type:'POST',
              url:'abbc.php',
              data:{'compy':compy},
              success:function(result){
                 
                  $('#state').html(result);
                 
              }
          }); 
	
	
	
	
	
	
	
	
	
	
	
	
	
		
})})


</script>






													  
														
                                                    </div>
                                                </div>



										</div>




										
										<div id="wizard_Payment" class="tab-pane" role="tabpanel">
											<div class="row emial-setup">
												
										
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Date</label>
														 <input required  name="date"type="date" class="form-control"/>
													</div>
														<div class="mb-3">
														<label class="text-label form-label">Time</label>
														  <input required  name="time"type="time" class="form-control"/>
													</div>
													
													
												</div>
												<button style='float:right;' type='submit' name='submit' class="btn btn-primary btn-sm" >Submit</button>
											</div>

										</div>
										</form>
									</div>
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
       <?php  include ('footer.php'); ?>
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