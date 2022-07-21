 <?php
 session_start();



$dan = $_GET[dan];









require_once "db_connection.php";


if (isset($_POST['submit'])) {
	

$email =$_POST['companyemail'];
$name = $_POST['companyname'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$city = $_POST['city'];
$owner =  $_POST['owner'];

$lisencenumber =  $_POST['lisencenumber'];
$lisenceenddate =$_POST['lisenceenddate'];
$lisencestartdate =$_POST['lisencestartdate'];
$website =$_POST['website'];
$address = $_POST['address'];


$sql ="UPDATE office SET companyname='$name',companyemail='$email',phone='$phone',country='$country',owner='$owner',city='$city',lisencenumber='$lisencenumber',lisencestartdate='$lisencestartdate',website='$website',lisenceenddate='$lisenceenddate',address='$address' WHERE id='$dan'";

 $result = $conn->query($sql);


if ($result === TRUE) {
 
} else {
 
}




}




 
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
<?php  include 'header.php';

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
                                <h4 class="card-title">Update Franchisee</h4>
                            </div>
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">

									<div class="tab-content">
										
										 <?php
				  
				  	
		
$sqll ="SELECT * FROM office WHERE id='$dan'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
				  
				  
				  
				  
				  ?>
				  <form action="#" method="post">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Company Name*</label>
														 <input required  type="text" value="<?php echo $roww['companyname'];?>" name="companyname" class="form-control" placeholder="Enter Company Name..."/>
														</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Owner Name*</label>
														<input required  name="owner" type="text" value="<?php echo $roww['owner'];?>" class="form-control" placeholder="Enter Department..."/>
													</div>
												</div>
												
												
												
											</div>
										
										
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">License Start Date*</label>
														<input required  name="lisencestartdate"type="date" value="<?php echo $roww['lisencestartdate'];?>" class="form-control"/>

													</div>
													
													<div class="mb-3">
														<label class="text-label form-label">License End Date*</label>
														<input required  name="lisenceenddate"type="date" value="<?php echo $roww['lisenceenddate'];?>" class="form-control"/>

													</div>
													


												
	
													
										
												
												

												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">License Number*</label>
														
														<input required  name="lisencenumber" type="text" class="form-control"value="<?php echo $roww['lisencenumber'];?>" placeholder="Enter Zoom Id..."/>
													</div>
													<div class="mb-3">
														<label class="text-label form-label">City*</label>
														<input required value="<?php echo $roww['city'];?>" type="text" name="city"class="form-control"/>
													</div>
												</div>
												
                                   
												
											</div>
										




										
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Email Address*</label>
														 <input required  name="companyemail" type="email" value="<?php echo $roww['companyemail'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
													</div>
												</div>
										
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Phone Number*</label>
														<input required value="<?php echo $roww['phone'];?>" type="number" name="phone"class="form-control"/>
													</div>
												</div>

											</div>
											<div class="row">
													<div class="col-lg-12 mb-1">
													<div class="mb-3">
														<label class="text-label form-label">Company Website*</label>
														 <input required  name="website"type="text" value="<?php echo $roww['website'];?>" class="form-control" placeholder="Enter Website..."/>
													</div>
												</div>
											</div>


											
											

										
										
											<div class="row emial-setup">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Country*</label>
														<input required  type="text" value="<?php echo $roww['country'];?>" name="country"class="form-control" placeholder="Enter Country..."/>
													</div>
												</div>
										
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Address*</label>
														<input required  type="text" value="<?php echo $roww['address'];?>" name="address"class="form-control" placeholder="Enter Address..."/>
													</div>
												</div>
												
											</div>

										
										               <button style='float:right;' type='submit' name='submit' class="btn btn-primary btn-sm" >Update</button>
									
									
									
									
									
									
									</form>
									
									<?php
									
  }
  
}
									?>
									
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