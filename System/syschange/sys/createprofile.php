

<?php
 


require_once "db_connection.php";


if (isset($_POST['submit'])) {
	

$role = $_POST['forr'];
$email =$_POST['email'];
$password =$_POST['password'];
$name = $_POST['name'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$company = $_POST['company'];
$designation =$_POST['designation'];
$city = $_POST['city'];
$department =  $_POST['department'];
$birthday =$_POST['birthday'];
$website =$_POST['website'];
$zoom = $_POST['zoom'];
$relevantinformation =$_POST['relevantinformation'];
$image = 'image1';








$CFU = isset($_POST['CFU']) ? "1" : "0";
$CF = isset($_POST['CF']) ? "1" : "0";

$C = isset($_POST['C']) ? "1" : "0";

$CCC = isset($_POST['CCC']) ? "1" : "0";

$CC = isset($_POST['CC']) ? "1" : "0";

$COA = isset($_POST['COA']) ? "1" : "0";

$CA = isset($_POST['CA']) ? "1" : "0";

$VC = isset($_POST['VC']) ? "1" : "0";

$DEL = isset($_POST['DEL']) ? "1" : "0";








$sql ="INSERT INTO users (name, email,password,username,country,city,birthday,zoom, company, phone, designation, department, website, relevantinformation,image,role,CFU,CF,C,CCC,CC,COA,CA,VC,DEL ) VALUES ('$name', '$email', '$password', '$username','$country','$city','$birthday','$zoom','$company','$phone','$designation','$department','$website','$relevantinformation','$image','$role','$CFU','$CF','$C','$CCC','$CC','$COA','$CA','$VC',$DEL)";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
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
				
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 align="center" class="card-title">Create Franchisee User</h4>
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
										<li><a class="nav-link" href="#wizard_Details">
											<span>3</span>
										</a></li>
										<li><a class="nav-link" href="#wizard_Payment">
											<span>4</span>
										</a></li>
										<li><a class="nav-link" href="#wizard_Payment1">
											<span>5</span>
										</a></li>
										
									</ul>
									
									
									
									
									
									<form id="regForm" action="#" method="post" enctype="multipart/form-data">

									
									<div class="tab-content">
										<div id="wizard_Service" class="tab-pane" role="tabpanel">
											<div class="row">
												 <div class="card-body">
											<h3 align="center">Select Role</h3>
                                <div class="basic-form">
                                    <form>
                                        <div align="center" class="mb-1 mb-12">
                                            <label class="radio-inline me-3"><input type="radio" name="forr"> Owner</label>
                                            <label class="radio-inline me-3"><input type="radio" name="forr"> Partner</label>
                                            <label class="radio-inline me-3"><input type="radio" name="forr"> Staff</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
												
												
												
											</div>
										</div>
										<div id="wizard_Time" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-xl-12 col-lg-12">
                        <div align="center" class="card">
                            
                            <div class="card-body">
                                <div class="basic-form">
                                  <h3 align='center'>Permissions:</h3>
                                        <div class="mb-12">
                                            <div class="form-check mb-12">
												<label class="form-check-label" for="check1">Create Franchisee Users</label>
                                                <input type="checkbox" name='CFU' class="form-check-input" id="check1" value="" checked="">
                                                
                                            </div>
                                            <div class="form-check mb-2">
												<label class="form-check-label" for="check2">Create Franchisee</label>
                                                <input type="checkbox" name='CF' class="form-check-input" id="check2" value="">
                                                
                                            </div>
                                            <div class="form-check ">
                                                <label class="form-check-label" for="check3">Contracts</label>
												<input type="checkbox" name='C'  class="form-check-input" id="check3" value="">
                                                
                                            </div>
											 <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Client Company</label>
												<input type="checkbox" name='CCC'  class="form-check-input" id="check3" value="">
                                                
                                            </div>
											 <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Customer</label>
												<input type="checkbox" name='CC'  class="form-check-input" id="check3" value="">
                                                
                                            </div>
											 <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Company Appointments</label>
												<input type="checkbox" name='COA'  class="form-check-input" id="check3" value="">
                                                
                                            </div>
											 <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Client Appointments</label>
												<input type="checkbox" name='CA' class="form-check-input" id="check3" value="">
                                                
                                            </div>
											 <div class="form-check ">
                                                <label class="form-check-label" for="check3">Video Chat</label>
												<input type="checkbox" name='VC'  class="form-check-input" id="check3" value="">
                                                
                                            </div>
											 <div class="form-check ">
                                                <label class="form-check-label" for="check3">Can Delete?</label>
												<input type="checkbox" name='DEL'  class="form-check-input" id="check3" value="">
                                                
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
					</div>
												
											</div>
										</div>




										<div id="wizard_Details" class="tab-pane" role="tabpanel">
											
												<div class="row">
												  <div class="input-group mb-3">
											<button class="btn btn-primary btn-sm" disabled type="button">Upload Profile Pic*</button>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input form-control" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                                            </div>
                                        </div>
												</div>
												
											<div class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Name*</label>
														<input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
													</div>
												</div>
												  
                                               <div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Phone Number*</label>
														<input type="text" name="phone" class="form-control" placeholder="(+1)408-657-9007" required="">
													</div>
												</div>

											</div>
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Country</label>
														<input type="text" name='country' class="form-control"  placeholder="Enter Country" >
													</div>
												</div>
										
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">City</label>
														<input type="text" name='city' class="form-control"  placeholder="Enter City" >
													</div>
												</div>

											</div>
											
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Date Of Birth</label>
														<input name="datepicker" name='birthday' class="datepicker-default form-control" id="datepicker">
													</div>
												</div>
										
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Relevant Information</label>
														<input type="textarea" name="relevantinformation" class="form-control" placeholder="Enter Relevant Information " required="">
													</div>
												</div>

											</div>

	                                       </div>
										
											

										
										<div id="wizard_Payment" class="tab-pane" role="tabpanel">
											<div class="row emial-setup">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Company</label>
														
														
														 
														 <select name='company' class="default-select form-control wide">
                                                <option selected="">Choose The Company...</option>
            <?php 
                
                $resultt=mysqli_query($conn,"SELECT id,companyname FROM office WHERE DEL='0'"); 
                while($row=mysqli_fetch_assoc($resultt)) { 
                    echo "<option value='$row[companyname]'>$row[companyname]</option>"; 
                } 
            ?> 
                </select> 
 
													</div>
												</div>
										
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Department</label>
														<input type="text" name="department" class="form-control" placeholder="Enter Department" required="">
													</div>
												</div>
												
											</div>

											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Designation</label>
														<input type="text" name="designation" class="form-control" placeholder="Enter Designation" required="">
													</div>
												</div>

												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Website</label>
														<input type="text" name="website" class="form-control" placeholder="Enter Website" required="">
													</div>
												</div>
											</div>

											<div class="row">
                                              <div class="col-lg-12 mb-">
													<div class="mb-3">
														<label class="text-label form-label">Zoom ID</label>
														<input type="text" name="zoom" class="form-control" placeholder="Enter Zoom ID" required="">
													</div>
												</div>
													
											</div>
										</div>
												<div id="wizard_Payment1" class="tab-pane" role="tabpanel">
													
													<div class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Email Address</label>
														<input type="text" name="email" class="form-control" placeholder="Enter Email" required="">
													</div>
												</div>
												  
                                               <div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Username*</label>
														<input type="text" name="username" class="form-control" placeholder="Enter User Name" required="">
													</div>
												</div>

											</div>

													<div class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Password</label>
														<input type="password" name="password" class="form-control" placeholder="" required="">
													</div>
												</div>
													</div>
													
													
														<div class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														 <input required  style="float:right;"type="submit" name="submit" value="Submit"class="btn btn-primary">
													</div>
												</div>
													</div>
													
													
													
													
													
													
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