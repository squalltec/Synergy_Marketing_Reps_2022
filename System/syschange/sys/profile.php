

 <?php


require_once "db_connection.php";





if (isset($_POST['submit'])) {
    
    
$name = $_POST['name'];

$password = $_POST['password'];

    

if($_FILES['myfile']['name']==""){
    
        

$sql ="UPDATE users SET name='$name',password='$password' WHERE id='21'";

 $result = $conn->query($sql);


if ($result === TRUE) {
 
} else {
 
}
	
}

else{


    
    
    	$filename = $_FILES['myfile']['name'];
	  $destination = 'admin/'. $filename;
	  $extension = pathinfo($filename, PATHINFO_EXTENSION);
	  $file = $_FILES['myfile']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            
            
            

$sql ="UPDATE users SET name='$name',password='$password',img='$filename' WHERE id='21'";

 $result = $conn->query($sql);


if ($result === TRUE) {
 
} else {
 
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
					<h3 align="center"> Profile <h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                              
                                
               	
										 <?php
				  
				  	
		
$sqll ="SELECT * FROM users WHERE id='21'";
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
				  
				  
            <img src="admin/<?php echo $roww['img'];?>" id="dp" class="" alt="" style="width:20%">
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
														<label class="text-label form-label">Name</label>
														
														
														  <input required  type="text" value="<?php echo $roww['name'];?>" name="name" class="form-control" placeholder="Enter Name..."/>
													</div>
												</div>
												  
												  
												  	<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Password</label>
														
														
														  <input required  type="text" value="<?php echo $roww['password'];?>" name="password" class="form-control" placeholder="Enter Password..."/>
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
          
     <!--**********************************
            Content body end
        ***********************************-->



    	
        <!--**********************************
            Footer start
        ***********************************-->
       <?php//  include 'footer.php'; ?>
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