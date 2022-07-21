<?php
 


$dan = $_GET[dan];









require_once "db_connection.php";


if (isset($_POST['submit'])) {
	

$role =$_POST['role'];
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


$CFU = isset($_POST['CFU']) ? "1" : "0";
$CF = isset($_POST['CF']) ? "1" : "0";

$C = isset($_POST['C']) ? "1" : "0";

$CCC = isset($_POST['CCC']) ? "1" : "0";

$CC = isset($_POST['CC']) ? "1" : "0";

$COA = isset($_POST['COA']) ? "1" : "0";

$CA = isset($_POST['CA']) ? "1" : "0";

$VC = isset($_POST['VC']) ? "1" : "0";

$DEL = isset($_POST['DEL']) ? "1" : "0";




$sql ="UPDATE users SET name='$name',email='$email',password='$password',username='$username',phone='$phone',country='$country',designation='$designation',city='$city',department='$department',birthday='$birthday',website='$website',zoom='$zoom',role='$role',CFU='$CFU',CF='$CF',CCC='$CCC',C='$C',CC='$CC',COA='$COA',CA='$CA',VC='$VC',DEL='$DEL' WHERE id='$dan'";

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
                                <h4 align="center" class="card-title">Update Franchisee User</h4>
                            </div>
                            <div class="card-body">
								
									
									
										  <?php
				  
				  	
		
$sqll ="SELECT * FROM users WHERE id='$dan'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
				  
				  
				  
				  
				  ?>
				   <form action="#" method="post">
									
									<div class="tab-content">
										
											<div class="row">
											
											
											
												 <div class="card-body">
											<h3 align="center">Select Role</h3>
                                <div class="basic-form">
                                    <div align="center" class="mb-1 mb-12">
									
									
									
									
											<div class="col-lg-6 mb-2">
													<div class="mb-3">
														
														<select name='role' class="default-select form-control wide">
                                              <option><?php echo $roww['role'];?></option>
			<option value="owner">Owner</option>
			<option value="partner">Partner</option>
			<option value="staff">Staff</option>
			
			<option value="sales">Sales</option>
			
			<option value="accounts">Accounts</option>
                                            </select>
													</div>
												</div>
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
						
			
			
                                        
                                          
                                        </div>
                                    
                                </div>
                            </div>
												
												
												
											</div>
										
										
											<div class="row">
												<div class="col-xl-12 col-lg-12">
                        <div align="center" class="card">
                            
                            <div class="card-body">
							<h3 align="center">Permissions</h3>
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-12">
										
																				   <?php
                     		  	
		
if($roww['CFU']=='1')
{
    
    ?>
    
      <div class="form-check mb-12">
												<label class="form-check-label" for="check1">Create Franchisee Users</label>
                                                <input type="checkbox" name='CFU' class="form-check-input" checked>
                                                
                                            </div>
<?php
}
else
{
    ?>
    
       <div class="form-check mb-12">
												<label class="form-check-label" for="check1">Create Franchisee Users</label>
                                                <input type="checkbox" name='CFU' class="form-check-input">
                                                
                                            </div>  
    <?php
}
	
?>
										
										
                                         
											
											
											
											               <?php
                     		  	
		
if($roww['CF']=='1')
{
    
    ?>
    
      <div class="form-check mb-2">
												<label class="form-check-label" for="check2">Create Franchisee</label>
                                                <input type="checkbox" name='CF' class="form-check-input" checked>
                                                
                                            </div>
<?php
}
else
{
    ?>
    
     <div class="form-check mb-2">
												<label class="form-check-label" for="check2">Create Franchisee</label>
                                                <input type="checkbox" name='CF' class="form-check-input">
                                                
                                            </div>
    
    <?php
}
	
?>   

											
                                         
											
											
											
											         <?php
                     		  	
		
if($roww['C']=='1')
{
    
    ?>
    
             <div class="form-check ">
                                                <label class="form-check-label" for="check3">Contracts</label>
												<input type="checkbox" name='C' class="form-check-input" checked>
                                                
                                            </div>
											
<?php
}
else
{
    ?>
             <div class="form-check ">
                                                <label class="form-check-label" for="check3">Contracts</label>
												<input type="checkbox" name='C' class="form-check-input">
                                                
                                            </div>
											 
    <?php
}
	
?>


                                   
											
											 <?php
                     		  	
		
if($roww['CCC']=='1')
{
    
    ?>
    
   <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Client Company</label>
												<input type="checkbox" name='CCC' class="form-check-input" checked>
                                                
                                            </div>
<?php
}
else
{
    ?>
    
      <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Client Company</label>
												<input type="checkbox" name='CCC' class="form-check-input">
                                                
                                            </div>
    
    <?php
}
	
?>

											
											 
											
											
											
											 <?php
                     		  	
		
if($roww['CC']=='1')
{
    
    ?>
    
    	
											 <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Customer</label>
												<input type="checkbox" name='CC' class="form-check-input" checked >
                                                
                                            </div>
											
<?php
}
else
{
    ?>
    
    <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Customer</label>
												<input type="checkbox" name='CC' class="form-check-input" >
                                                
                                            </div>
    
    <?php
}
	
?>
											
											
											
											
											
											
											
										
											
											
  <?php
                     		  	
		
if($roww['COA']=='1')
{
    
    ?>
    
  		 <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Company Appointments</label>
												<input type="checkbox" name='COA' class="form-check-input" checked>
                                                
                                            </div>
<?php
}
else
{
    ?>
    
    		 <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Company Appointments</label>
												<input type="checkbox" name='COA' class="form-check-input">
                                                
                                            </div>
    
    <?php
}
	
?>
											
											
											
											
									
											
											
											
											 <?php
                     		  	
		
if($roww['CA']=='1')
{
    
    ?>
    
   <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Client Appointments</label>
												<input type="checkbox" name='CA' class="form-check-input" checked>
                                                
                                            </div>
<?php
}
else
{
    ?>
    
   <div class="form-check ">
                                                <label class="form-check-label" for="check3">Create Client Appointments</label>
												<input type="checkbox" name='CA' class="form-check-input">
                                                
                                            </div>
    
    <?php
}
	
?>
											
											
											
											
											
											
											
											
											 
											
											
											
                     
            <?php
                     		  	
		
if($roww['VC']=='1')
{
    
    ?>
    
     <div class="form-check ">
                                                <label class="form-check-label" for="check3">Video Chat</label>
												<input type="checkbox" name='VC' class="form-check-input" checked>
                                                
                                            </div>
<?php
}
else
{
    ?>
    
        <div class="form-check ">
                                                <label class="form-check-label" for="check3">Video Chat</label>
												<input type="checkbox" name='VC' class="form-check-input">
                                                
                                            </div>
    
    <?php
}
	
?>   
											
											
											
											
											
											
											
											
											
											
											
	
            <?php
                     		  	
		
if($roww['DEL']=='1')
{
    
    ?>
    <div class="form-check ">
                                                <label class="form-check-label" for="check3">Can Delete?</label>
												<input type="checkbox" name='DEL'class="form-check-input" checked>
                                                
                                            </div>
    
<?php
}
else
{
    ?>
    
    <div class="form-check ">
                                                <label class="form-check-label" for="check3">Can Delete?</label>
												<input type="checkbox" name='DEL'class="form-check-input">
                                                
                                            </div>
    
    <?php
}
	
?> 
											
											
											
											
											
											
											
											
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
												
											</div>
										




										
										
												
											<div class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Name*</label>
														
														
														 <input required class="form-control" type="text" value="<?php echo $roww['name'];?>" name="name" placeholder="Enter Name..."/>
													</div>
												</div>
												  
                                               <div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Phone Number*</label>
														   <input required value="<?php echo $roww['phone'];?>" type="number" name="phone" class="form-control"/>
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

											<div class="row">
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
												  
                                               <div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Username*</label>
														<input required  type="text" value="<?php echo $roww['username'];?>" name="username"class="form-control" placeholder="Enter Username..."/>
													</div>
												</div>

											</div>

													<div class="row">
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Password</label>
														 <input required  name="password" type="password" value="<?php echo $roww['password'];?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
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