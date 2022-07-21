<?php 





require_once "db_connection.php";


if (isset($_POST['submit'])) {
    
    
    	
$companyname = $_POST['companyname'];
$countryname = $_POST['countryname'];
$cityname = $_POST['cityname'];
$establishedyear =$_POST['establishedyear'];
//$speciality = $_POST['speciality'];
$staffstrength = $_POST['staffstrength'];
$location = $_POST['location'];
$lat = $_POST['lat'];
$long = $_POST['long'];
$branches = "";
$countrycodee = $_POST['countrycode'];
$phonee = $_POST['phone'];


$phone=$countrycodee.(string) $phonee;
$website =$_POST['website'];




if($companyname==""||$countryname==""||$cityname==""||$location==""){
    
    echo "<script>swal('Please Enter Company, Country, City and Location Properly');</script>";
}
    
    
    else{
	
	
/*	
$branchess=array();	
	
if(!empty($_POST['branchesnames']) && is_array($_POST['branchesnames'])){	
    
    $getbranches = $_POST['branchesnames'];
    
   foreach ($getbranches as $value) {
	
	array_push($branchess,$value);
	
	
	
  
}
    
}*/
	
	
	
	
	
	
	
	
	
	
	
	
$activityOptions= array(
'FIT',
'Leisure',
'MICE',
'Cooperate',
'Groups'
);


$activities=array();

if(!empty($_POST['activity']) && is_array($_POST['activity'])){
    
    

//Loop through the array of checkbox values.
foreach($_POST['activity'] as $vegetables){
    

//Make sure that this option is a valid one.
if(in_array($vegetables, $activityOptions)){
    

//Add the selected options to our $vegetables array.
$activities[]=$vegetables;





}
}
}
	
	
	
	
	
	
	
	
	
	
	
	
	

$getactivities = $_POST['activity'];


	
	
/*

$sqlTpll = "INSERT INTO branches ( name,country,city,location,branch)
           VALUES (%s )";
           
		   
		   
$sqlArrr = array();

foreach( $branchess as $k => $v )

  $sqlArrr[] = '"'.$companyname.'","'.$countryname.'","'.$cityname.'","'.$location.'","'.$branchess[$k].'"';
$sqlStrr = sprintf( $sqlTpll ,
            implode( ' ) , ( ' , $sqlArrr ) );


 $resultarr = $conn->query($sqlStrr);
 

if ($resultarr === TRUE) {
    
      
  
} else {
  echo "Error: " . $sqlStrr . "<br>" . $conn->error;
}*/
    
    
    

	mkdir("Local Company Lisences/".$companyname);	
	

		
		
		
		
	  $filename = $_FILES['myfile']['name'];
	  $destination = 'Local Company Lisences/'. $companyname . '/' . $filename;
	  $extension = pathinfo($filename, PATHINFO_EXTENSION);
	  $file = $_FILES['myfile']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            
            
            echo "Uploaded";


		}
		
		
		
		
		
            
			
$sql ="INSERT INTO local_company (companyname,establishedyear,staffstrength,location,lat,longg,branches,logo,phone,website,country,city) VALUES ('$companyname', '$establishedyear','$staffstrength','$location','$lat','$long','$branches','$filename','$phone','$website','$countryname','$cityname')";


 $result = $conn->query($sql);


if ($result === TRUE) {
    
    
    
    
    
    
    

$sqlTpl = "INSERT INTO activity ( name,country,city,address,activity)
           VALUES (%s )";
		   
		   
$sqlArr = array();

foreach( $activities as $k => $v )

  $sqlArr[] = '"'.$companyname.'","'.$countryname.'","'.$cityname.'","'.$location.'","'.$activities[$k].'"';
$sqlStr = sprintf( $sqlTpl ,
            implode( ' ) , ( ' , $sqlArr ) );


 $resultar = $conn->query($sqlStr);
 

	

if ($resultar === TRUE) {
    
    
      
  
} else {
  echo "Error: " . $sqlStr . "<br>" . $conn->error;
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
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>
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
                                <h4 class="card-title">Create Client Company</h4>
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
												<div class="col-lg-12 mb-1">
															
											
															
															
															
																								
                                       
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Comapny Name</label>
														<input   type="text" name="companyname" id="companyc" class="form-control" placeholder="Enter Company Name..."/>
													</div>
												</div>
												
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Country</label>
													
													 <select id="country" class="form-control" name="countryname">
													<option value="0">Select Country</option>
												<?php
												$sqlla ="SELECT * FROM countries";
		$resultta = $conn->query($sqlla);

	
	
if ($resultta->num_rows > 0) {
  // output data of each row
  while($rowwa = $resultta->fetch_assoc()) {
	
		     
													     
	?>
	
	

		<option value="<?php echo $rowwa['id'];?>"><?php echo $rowwa['name']; ?> </option>
	
	


<?php
}
}
?>
    </select>
														
														
														
														
														
														
													</div>
												</div>
												
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">City</label>
														
														
														
															 <select id="city" class="form-control" name="cityname">
													<option value="0">Select City</option>
														
														
														
													</select>
														
														
														
														
													</div>
												</div>
												
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Address</label>
														 <input type="text" name="location" value="" placeholder="Address"  class="form-control">
													</div>
												</div>
												
											
												
												
											</div>
										</div>
										<div id="wizard_Time" class="tab-pane" role="tabpanel">
											<div align="center" class="row">
											    
											    
											    
											    	<div class="col-lg-12 mb-1">
													<div class="mb-3">
														<label class="text-label form-label">Company Website*</label>
														 <input type="text" name="website" value="" placeholder="Website"  class="form-control"/>
													</div>
												</div>
												
													<label class="text-label form-label">Phone Number*</label>
												
													<div class="col-lg-12 mb-1">
													<div class="mb-3">
												
													
														<div style="display: flex;  flex-flow: row wrap;  align-items: center; display: block;" >
														    
														<input class="form-control" style="width:10%; background-color:grey;" readonly  id="countrycode" name="countrycode" type="text"> 
													
														</div>
													
												</div>
												</div>
												
													<div class="col-lg-12 mb-1">
													<div class="mb-3">
													
														<input id="phone" type="number" name="phone"class="form-control"/>
														</div>
														</div>
												
												
													
												<div class="col-lg-12 mb-1">
													<div class="mb-3">
														<label class="text-label form-label">Established Year</label>
														 <input type="number" name="establishedyear" value="" placeholder="Established Year"  class="form-control"/>
													</div>
												</div>
											
										
												<div style="display:none;"  class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Latitude*</label>
														<input type="text" class="form-control" name="lat" value="" placeholder="Latitude" >

													</div>
												</div>
													<div class="row">
												<div style="display:none;"  class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Longitude*</label>
														<input type="text" class="form-control" name="long" value="" placeholder="Longitude" >
													</div>
												</div>
												</div>
												
											    
											    
											    
											    
											    
											    
											
												
											</div>
										</div>




										<div id="wizard_Details" class="tab-pane" role="tabpanel">
											<div class="row">
											
												
													<div class="col-lg-6 mb-2">
													<div class="mb-3">
													    
													    
													    
												    
						
						
					
													    
													    
													    
													    
													    
														<label class="text-label form-label">Activities*</label>
														
		





				<br/>									
											  
<input type="checkbox" name="activity[]" value="FIT">&nbsp;FIT &nbsp;
<input type="checkbox" name="activity[]" value="Leisure">&nbsp;Leisure&nbsp;
<input type="checkbox" name="activity[]" value="Groups">&nbsp;Groups&nbsp;
<input type="checkbox" name="activity[]" value="MICE">&nbsp;MICE &nbsp;
<input type="checkbox" name="activity[]" value="Cooperate">&nbsp;Cooperate






														    
														   

													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Staff Strength*</label>
														
														<input type="number" class="form-control" name="staffstrength" value="" placeholder="Staff Strength" >
													</div>
												</div>
												
                                       <!-- <div class="col-lg-6 mb-2">
													<div class="mb-3">
													    
													    
														<label class="check text-label form-label">Branches*</label>
													
														<input type="number" id="check" name="branches" value="" placeholder="Branches"  class="form-control"/>
												
															
														
														
													</div>
												</div>
												-->
												
												 <div class="col-lg-6 mb-2">
													<div style=" margin:4px, 4px;
                padding:4px;
                width:auto;
                height: 110px;
                overflow-x: hidden;
                overflow-y: auto;
              "class="mb-3">
													    
													    	<p id="listbranches">
															    
															</p>
															
															</div>
												
												</div>
												
											</div>
											

											
											

										</div>
										<div id="wizard_Payment" class="tab-pane" role="tabpanel">
											

											<div class="row">
												<div class="row">
											
                                                  
											
												
												
												 <div class="input-group mb-3">
											<button class="btn btn-primary btn-sm" type="button" disabled>Upload Logo*</button>
                                            <div class="form-file">
                                                <input type="file" name='myfile' class="form-file-input form-control">
                                            </div>
                                        </div>
												
											</div>

<input style="display:none; float:right;" type="submit" name="submit" value="Submit"class="abcsub btn btn-primary">
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
 

<style>
    .swal2-confirm{
        background-color:#bb9438 !important;
    }
</style>
<script>
 var p="";
 
 
 
   $("#companyc").on('change', function() {
	
	
	var co= $("#companyc").val();
	
	
	 $.ajax({
              type:'POST',
              url:'validatecompany.php',
              data:{'co':co},
              success:function(result){
                
              
                var ch= String(result);
               
               if (!$.trim(result)){ }
                      else{
            swal("Oops!", "Company Name Already Exists, Please Change!", "error");  
                     
	 $("#companyc").val("");
	 
                      }
                 
                      
                  }
                 
                 
          }); 
	
	
	
	
	
	
	
	
	
	
	

	
   });
 
 
 
 
  $("#check").on('change', function() {
     var a=$("#check").val();
    
    
    document.getElementById("listbranches").innerHTML="";
    for (i=0; i<a; i++)
    {
   
var y = document.createElement("INPUT");
y.setAttribute("type", "text");
y.setAttribute("class", "form-control");
y.setAttribute("id","branchesnames[]");
y.setAttribute("Name", "branchesnames[]");
y.setAttribute("Placeholder", "Branch Location");

document.getElementById("listbranches").appendChild(y);

}
    
     
 });
 
 
 
 
 
 
 
    $("#country").on('change', function() {
	

	var	compy1 = $("#country").val();
	

	
	
	
	
	
	
	  $.ajax({
              type:'POST',
              url:'getcity.php',
              data:{'compy1':compy1},
              success:function(result){
                 
                  $('#city').html(result);
                  
                 
              }
          }); 
		  
		 
		  	  $.ajax({
              type:'POST',
              url:'getphoncode.php',
              data:{'compyy1':compy1},
              success:function(result){
                 
             
                p="+"+result;
              
              
                $('#countrycode').val(p)
              
                  
                 
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