<?php
 


$dan = $_GET[dan];









require_once "db_connection.php";


if (isset($_POST['submit'])) {
	

$email =$_POST['email'];
$password =$_POST['password'];
$name = $_POST['name'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$designation =$_POST['designation'];
$city = $_POST['city'];
$department =  $_POST['department'];
$birthday =$_POST['birthday'];
$website =$_POST['website'];
$zoom = $_POST['zoom'];
$relevantinformation = $_POST['relevantinformation'];
$interests = $_POST['interests'];
$likesdislikes = $_POST['likesdislikes'];



if($_FILES['myfile']['name']==""){
	
	
	
$sql ="UPDATE customer SET name='$name',email='$email',password='$password',username='$username',phone='$phone',country='$country',designation='$designation',city='$city',department='$department',birthday='$birthday',website='$website',zoom='$zoom',relevantinformation='$relevantinformation',interests='$interests',likesdislikes='$likesdislikes' WHERE id='$dan'";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


else{

		$filename = $_FILES['myfile']['name'];
	  $destination = 'Customer Images/'. $dan . '/' . $filename;
	  $extension = pathinfo($filename, PATHINFO_EXTENSION);
	  $file = $_FILES['myfile']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {






$sql ="UPDATE customer SET name='$name',email='$email',password='$password',username='$username',phone='$phone',country='$country',designation='$designation',city='$city',department='$department',birthday='$birthday',website='$website',zoom='$zoom',relevantinformation='$relevantinformation',interests='$interests',likesdislikes='$likesdislikes',image='$filename' WHERE id='$dan'";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




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
                                <h4 align="center" class="card-title">Update Customer</h4>
                            </div>
                            <div class="card-body">
								
									
									
										<?php
				  
				  	
		
$sqll ="SELECT * FROM customer WHERE id='$dan'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
				  
				  ?>
				  
				  <form action="#" method="post" enctype="multipart/form-data">
									
									<div class="tab-content">
										
											<div class="row">
											
											
											
												 <div class="card-body">
												 
												 
												 
												 
												 
											
                                <div class="basic-form">
                                    <div align="center" class="mb-1 mb-12">
									
									
									
									
											<div class="col-lg-6 mb-2">
													<div class="mb-3">
														
														
														
														
														
														
														
														
														  
				  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				  
				  
            <img src="Customer Images/<?php echo $roww['username'];?>/<?php echo $roww['image'];?>" id="dp" class="w3-circle" alt="" style="width:10%">
			</br>
			</br>

					
					<input accept="image/*" name="myfile" type="file" id="files" />



<script>
document.getElementById('files').onchange = function () {
  var src = URL.createObjectURL(this.files[0])
  document.getElementById('dp').src = src
}

</script>
			
														
														
														
														
														
														
														
														
														
														
														
													</div>
												</div>
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
						
			
			
                                        
                                          
                                        </div>
                                    
                                </div>
                            </div>
												
												
												
											</div>
										
									


										
										
												
											<div class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Name*</label>
														
														
														  <input required  type="text" value="<?php echo $roww['name'];?>" name="name" class="form-control" placeholder="Enter Name..."/>
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
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Country</label>
														 <input required  type="text" value="<?php echo $roww['country'];?>" name="country"class="form-control" placeholder="Enter Country..."/>
													</div>
												</div>
										
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">City</label>
														  <input required  name="city"type="text" value="<?php echo $roww['city'];?>" class="form-control" placeholder="Enter City..."/>
													</div>
												</div>

											</div>
											
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Date Of Birth</label>
														    <input required  name="birthday"type="date" value="<?php echo $roww['birthday'];?>" class="form-control"/>
													</div>
												</div>
										

											</div>

	                                       
										
											

										
										
											<div class="row emial-setup">
										
										
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Department</label>
														 <input required  name="department" type="text" value="<?php echo $roww['department'];?>" class="form-control" placeholder="Enter Department..."/>
													</div>
												</div>
												
											</div>

											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Designation</label>
														<input required  name="designation" type="text" value="<?php echo $roww['designation'];?>" class="form-control" placeholder="Enter Designation..."/>
													</div>
												</div>

												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Website</label>
														 <input required  name="website"type="text" value="<?php echo $roww['website'];?>" class="form-control" placeholder="Enter Website..."/>
													</div>
												</div>
											</div>

											<div style="display:none;" class="row">
                                              <div class="col-lg-12 mb-">
													<div class="mb-3">
														<label class="text-label form-label">Zoom ID</label>
														 <input required  name="zoom" type="text" class="form-control"value="<?php echo $roww['zoom'];?>" placeholder="Enter Zoom Id..."/>
													</div>
												</div>
													
											</div>
										
												
													
													<div class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Email Address</label>
														 <input required  name="email" type="email" value="<?php echo $roww['email'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
													</div>
												</div>
												  
                                               <div style="display:none;" class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Username*</label>
														 <input required  type="text" value="<?php echo $roww['username'];?>" name="username"class="form-control" placeholder="Enter Username..."/>
													</div>
												</div>

											</div>

													<div  style="display:none;" class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Password</label>
														 <input required  name="password" type="password" value="<?php echo $roww['password'];?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
													</div>
												</div>
														
												
													</div>
													
														<div class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Relevant Informations</label>
														<textarea required  name="relevantinformation" class="form-control" placeholder="Enter Relevant Information..."><?php echo $roww['relevantinformation'];?></textarea>
														</div>
												</div>
														
												
													</div>
													
														<div class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Interests</label>
														 <textarea required  name="interests" class="form-control" placeholder="Enter Interests..."><?php echo $roww['interests'];?></textarea>
														 </div>
												</div>
														
												
													</div>
													
														<div class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Likes Dislikes</label>
														<textarea required  name="likesdislikes" class="form-control" placeholder="Enter Likes Dislikes..."><?php echo $roww['likesdislikes'];?></textarea>
														</div>
												</div>
														
												
													</div>
													<button style='float:right;' type='submit' name='submit' class="btn btn-primary btn-sm" >Update</button>
										</div>
										
										
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