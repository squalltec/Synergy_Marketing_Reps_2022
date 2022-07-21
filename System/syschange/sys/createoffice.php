
 
 <?php



require_once "db_connection.php";

if (isset($_POST['submit'])) {
	
	
	


	
$companyname = $_POST['companyname'];
$companyemail =$_POST['companyemail'];
$country = $_POST['country'];
$city = $_POST['city'];
$address = $_POST['address'];
$owner = $_POST['owner'];
$lisencestartdate = $_POST['lisencestartdate'];
$lisenceenddate = $_POST['lisenceenddate'];
$lisencenumber = $_POST['lisencenumber'];

$phone = $_POST['phone'];
$website =$_POST['website'];




	mkdir("General Lisences/".$companyname);	
	

		
		
		
		
	  $filename = $_FILES['myfile']['name'];
	  $destination = 'General Lisences/'. $companyname . '/' . $filename;
	  $extension = pathinfo($filename, PATHINFO_EXTENSION);
	  $file = $_FILES['myfile']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
			
$sql ="INSERT INTO office (companyname, companyemail,country,city,address,owner,lisencestartdate,lisenceenddate,lisencenumber,lisence,phone,website ) VALUES ('$companyname', '$companyemail','$country','$city','$address','$owner','$lisencestartdate','$lisenceenddate','$lisencenumber','$filename','$phone','$website')";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
  
  $str = str_replace(' ', '', $companyname);
  $sql = "CREATE DATABASE $str";
if ($conn->query($sql) === TRUE) {
	
  echo "Database created successfully";
  
  
  
  
} else {
  echo "Error creating database: " . $conn->error;
}
  
  
  
  
  
  
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

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
            Content body start
        ***********************************-->
		 <div class="content-body">

            <div class="container-fluid">
			
			
			
			
			<form id="regForm" action="#" method="post" enctype="multipart/form-data">
			
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create Franchise</h4>
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
										
										
									</ul>
									<div class="tab-content">
										<div id="wizard_Service" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Company Name*</label>
														<input type="text" name="companyname" class="form-control" placeholder="Enter Company Name" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Owner Name*</label>
														<input type="text" name="owner" class="form-control" placeholder="Enter Owner Name" required>
													</div>
												</div>
												
												
												
											</div>
										</div>
										<div id="wizard_Time" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">License Start Date*</label>
														<input type="date" name="lisencestartdate" class="form-control" placeholder="Select the Start Date" required>

													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Lisence End Date*</label>
														
														<input type="date" name="lisenceenddate" class="form-control" placeholder="Select the End Date" required>
													</div>
												</div>
												
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">The License Number*</label>
														
														<input type="text" name="licencenumber" class="form-control" placeholder="Enter License Number" required>
													</div>
												</div>
												
												
                                        <div class="input-group mb-3">
											<button class="btn btn-primary btn-sm" type="button">Upload The License*</button>
                                            <div class="form-file">
                                                <input name='myfile' type="file" class="form-file-input form-control" required>
                                            </div>
                                        </div>
												
											</div>
										</div>




										<div id="wizard_Details" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Email Address*</label>
														<input name='companyemail' type="email" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="example@example.com.com" required>
													</div>
												</div>
										
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Phone Number*</label>
														<input type="number" name="phone" class="form-control" placeholder="(+1)408-657-9007" required>
													</div>
												</div>

											</div>
											<div class="row">
													<div class="col-lg-12 mb-1">
													<div class="mb-3">
														<label class="text-label form-label">Company Website*</label>
														<input type="text" name="website" class="form-control" placeholder="www.example.com" required>
													</div>
												</div>
											</div>


											
											

										</div>
										<div id="wizard_Payment" class="tab-pane" role="tabpanel">
											<div class="row emial-setup">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Country*</label>
														<input name='country' type="text" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="Country" required>
													</div>
												</div>
										
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">City*</label>
														<input type="text" name="city" class="form-control" placeholder="Enter City" required>
													</div>
												</div>
												
											</div>

											<div class="row">
												<div class="col-lg-12 mb-1">
													<div class="mb-3">
														<label class="text-label form-label">Address*</label>
														<input type="text" name="address" class="form-control" placeholder="Enter Address" required>
														
													</div>
												</div>
											</div>
											
											
											<div class="row">
												<div class="col-lg-12 mb-1">
													<div style="float:right; width:100px;" class="mb-3">
														
														<input style='font-size:1.2em; background-color:#bb9438;'type="submit" name="submit" class="form-control" value='submit'>
														
													</div>
												</div>
											</div>
											
											
											
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
				
				</form>
				
				
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
