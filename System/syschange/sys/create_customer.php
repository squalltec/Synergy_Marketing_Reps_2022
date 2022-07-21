
 <?php



require_once "db_connection.php";

if (isset($_POST['submit'])) {
	
$title = $_POST['title'];
$role = 'customer';
$email =$_POST['email'];
$password ="";
$name = $_POST['name'];
$username = "";
$phone = $_POST['phone'];
$country = $_POST['country'];
$company = $_POST['company'];
$designation =$_POST['designation'];
$city = $_POST['city'];
$department =  $_POST['department'];
$birthday =$_POST['birthday'];
$website =$_POST['website'];
$zoom = "";
$relevantinformation =$_POST['relevantinformation'];

$interests =$_POST['interests'];

$likesdislikes =$_POST['likesdislikes'];
$image = 'image1';

$dan=	 $_POST['username'];



	mkdir("Customer Images/".$dan);	
	

		
		
		
		
	  $filename = $_FILES['myfile']['name'];
	  $destination = 'Customer Images/'. $dan . '/' . $filename;
	  $extension = pathinfo($filename, PATHINFO_EXTENSION);
	  $file = $_FILES['myfile']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {















$sql ="INSERT INTO customer (title,name, email,password,username,country,city,birthday,zoom, company, phone, designation, department, website, relevantinformation,image,role,interests,likesdislikes ) VALUES ('$title','$name', '$email', '$password', '$username','$country','$city','$birthday','$zoom','$company','$phone','$designation','$department','$website','$relevantinformation','$filename','$role','$interests','$likesdislikes')";

 $result = $conn->query($sql);


if ($result === TRUE) {
 
} else {
 
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
        
          
        <style>
            /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
        </style>
        
		 <div class="content-body">

            <div class="container-fluid">
				
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Create Customer</h4>
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
									<form id="regForm" action="#" method="post" enctype="multipart/form-data">
									
									
										<div id="wizard_Service" class="tab-pane" role="tabpanel">
										
										
										
										
											<div class="row">
											    
											    
												
												<div class="col-lg-6 mb-2">
												    
												    
												    <div class="mb-3">
														<label class="text-label form-label">Company*</label>
														 
														 <select class='form-control' id="company" name="company">
                   <option>Select Company</option>
            <?php 
                
                $resultt=mysqli_query($conn,'SELECT id,companyname FROM local_company'); 
                while($row=mysqli_fetch_assoc($resultt)) { 
                    echo "<option value='$row[companyname]'>$row[companyname]</option>"; 
                } 
            ?> 
                </select> 
 
 
													</div>
													
														</div>
													
													
													
															<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Country</label>
														
														
														<input id="country" type="text" name="country"class="country form-control" placeholder="Enter Country..."/>
														
														
													</div>
												</div>
										
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">City*</label>
														<input  id="city" name="city"type="text" class="form-control" placeholder="Enter City..."/>
													</div>
												</div>
													
													
													
													
													
													
														<div class="col-lg-6 mb-2">
													
													
													
													
													
													
													
													
													<div class="mb-3">
														<label class="text-label form-label">Website</label>
														<input id="website"  type="text" name="website" class="form-control" placeholder="Enter Website..."/>
													</div>
													
												</div>
												
												
												
											
											
												
												
											</div>
										</div>
										
										
										
										
										<div id="wizard_Time" class="tab-pane" role="tabpanel">
											<div class="row">
										
										
										
										
												
												<div class="col-lg-6 mb-2">
												    
												        <div class="mb-3">
												        
												    <label class="text-label form-label">Title</label>
												    <select class="form-control" name="title"><option>Mr.</option><option>Mrs.</option><option>Miss.</option><option>Dr.</option></select>
												
												        
												        </div>
											
												<div class="mb-3">
														<label class="text-label form-label">Name</label>
														<input   type="text" name="name" id="name" class="form-control" placeholder="Enter Name..."/>
													</div>
											
											</div>
											
											
											
											
											
											
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Designation*</label>
														
														<input id="designation" name="designation" type="text" class="form-control" placeholder="Enter Designation..."/>
													</div>
												</div>
												
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Department*</label>
														
														 <input id="department" name="department" type="text" class="form-control" placeholder="Enter Department..."/>
													</div>
												</div>
												
												
												
												
												
													<div class="col-lg-12 mb-1">
																								
                                        <div class="input-group mb-3">
											<button class="btn btn-primary btn-sm" type="button" disabled>Upload Image*</button>
                                            <div class="form-file">
                                                 <img id="dp" class="w3-circle" alt="" style="width:4%">
			</br>
			</br>

					
					<input accept="image/*" class='form-control' name="myfile" type="file" id="files" />



<script>
document.getElementById('files').onchange = function () {
  var src = URL.createObjectURL(this.files[0])
  document.getElementById('dp').src = src
}

</script>
                                            </div>
                                        </div>
												</div>
												
												
												
												
												
												<div style="display:none;" class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Zoom*</label>
														
														 <input   name="zoom" type="text" class="form-control" placeholder="Enter Zoom Id..."/>
													</div>
												</div>
												
                                      
												
											</div>
										</div>




										<div id="wizard_Details" class="tab-pane" role="tabpanel">
											<div class="row">
										
										
											<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Mobile Number*</label>
														 <input id="phone" type="number" name="phone"class="form-control"/>
													</div>
												</div>
												
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Email*</label>
													   <input   name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
													</div>
												</div>
												
												
										
										
										
										
										
										
											</div>
											

											
											

										</div>
										<div id="wizard_Payment" class="tab-pane" role="tabpanel">
											

											<div class="row">
												<div class="row">
												
												
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Birthday	</label>
														 <input   name="birthday"type="date" class="form-control"/>
													</div>
												</div>
														
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Likes Dislikes*</label>
														<textarea name="likesdislikes" class="form-control" rows="3" placeholder="Enter Likes and Dislikes..."></textarea>
													</div>
												</div>
												
													<div class="col-lg-12 mb-1">
													<div class="mb-3">
														<label class="text-label form-label">Interests*</label>
														<textarea name="interests" class="form-control" rows="3" placeholder="Enter Interests..."></textarea>
													</div>
												</div>
												
                                                    <div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Relevant Information*</label>
														 <textarea name="relevantinformation" class="form-control" rows="3" placeholder="Enter Relevant Information..."></textarea>
													</div>
												</div>
												
												
											
											
												
												<div style="display:none;" class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Username*</label>
														<input   type="text" name="username"class="form-control" placeholder="Enter Username..."/>
													</div>
												</div>
												
												<div style="display:none;" class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Password*</label>
														 <input value=""  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
													</div>
												</div>
												
												
												<input   style="display:none; float:right;"type="submit" name="submit" value="Submit"class="abcsub btn btn-primary">
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
    <!--  vendors -->
 

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>










<script>
 var p="";
 var pp="";
 var ppp="";
 
 
 
 
 
 
 
 
 
 
    $("#company").on('change', function() {
        
	var	compy1 = $("#company").val();
	
    	

	
	  $.ajax({
              type:'POST',
              url:'getcustomercountry.php',
              data:{'compy1':compy1},
              success:function(result){
                 
                 p=result;
                 
	
                 
                   $('.country').val(p);
                
                  
                 
              }
               
          }); 
          
          
          
          
	  $.ajax({
              type:'POST',
              url:'getcustomercity.php',
              data:{'compyy1':compy1},
              success:function(result){
                 
                 pp=result;
                 
	
                 
                   $('#city').val(pp);
                
                  
                 
              }
               
          }); 
          
          
          
          
          $.ajax({
              type:'POST',
              url:'getcustomerwebsite.php',
              data:{'compyyy1':compy1},
              success:function(result){
                 
                 ppp=result;
                 
	
                 
                   $('#website').val(ppp);
                
                  
                 
              }
               
          }); 
          
          
          
               
	  $.ajax({
              type:'POST',
              url:'getcustomerphonecode.php',
              data:{'compyyyy1':compy1},
              success:function(result){
                 
               
                p=parseInt(result, 10);
              
              
               
               $('#phone').val(p);
             
                  
                 
              }
             
          }); 
          
		  
		  
		 
		 
		  	
           
           
		  
		
	
})







   $("#designation").on('change', function() {
	
	
	var na= $("#name").val();
	var co= $("#company").val();
	var des= $("#designation").val();
	var dep= $("#department").val();
	

	
	
	 $.ajax({
              type:'POST',
              url:'validatecustomer.php',
              data:{'co':co,'na':na,'des':des,'dep':dep},
              success:function(result){
                
                var ch= String(result);
               
               if (!$.trim(result)){ }
                      else{
            swal("Oops!", "Customer For This Company, Designation, Department Already Exists with Same Name, Please Change!", "error");  
                     
	
	 
                      }
                 
                      
                  }
                 
                 
          }); 
 
 
   })







 $("#department").on('change', function() {
	
	
	var na= $("#name").val();
	var co= $("#company").val();
	var des= $("#designation").val();
	var dep= $("#department").val();
	

	
	
	 $.ajax({
              type:'POST',
              url:'validatecustomer.php',
              data:{'co':co,'na':na,'des':des,'dep':dep},
              success:function(result){
                
                var ch= String(result);
               
               if (!$.trim(result)){ }
                      else{
            swal("Oops!", "Customer For This Company, Designation, Department Already Exists with Same Name, Please Change!", "error");  
                     
	
	 
                      }
                 
                      
                  }
                 
                 
          }); 
 
 
   })


</script>















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