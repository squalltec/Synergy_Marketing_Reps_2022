<?php 

include('header_owner.php');



require_once "db_connection.php";

$createdbyid='';
 $createdbyname ='';

if (isset($_POST['submit'])) {
    
    $cmpna = $_SESSION['company'];
    $cntryna = $_SESSION['ucountry'];
    $ctyna = $_SESSION['ucity'];
    
    $createdbyname = $_SESSION['user_name'];
    
    	$sqllat ="SELECT * FROM office WHERE companyname='$cmpna' && country='$cntryna' & city='$ctyna' ";
		$resulttat = $conn->query($sqllat);

	
	
if ($resulttat->num_rows > 0) {
  // output data of each row
  while($rowwat = $resulttat->fetch_assoc()) {
      
      $createdbyid=$rowwat['id'];
      
  }}
    
    
    
    
    
    	
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
	  $destination = 'Local Company Lisences/' . $filename;
	  $extension = pathinfo($filename, PATHINFO_EXTENSION);
	  $file = $_FILES['myfile']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            
            
           // echo "Uploaded";


		}
		
		
		
		
		
            
			
$sql ="INSERT INTO local_company (companyname,establishedyear,staffstrength,location,lat,longg,branches,logo,phone,website,country,city,createdbycompanyid,createdbyname) VALUES ('$companyname', '$establishedyear','$staffstrength','$location','$lat','$long','$branches','$filename','$phone','$website','$countryname','$cityname','$createdbyid','$createdbyname')";


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
    
    
    
    
    echo ("<script>location.href='decider_owner.html'</script>");
    
    
    
    
    
    
    
      
  
} else {
  echo "Error: " . $sqlStr . "<br>" . $conn->error;
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
		
		





}

}




?>















 
 
   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section style='background-color:#222;' class="content-header">
          <h1 style='float:left; color:white;'>
            Create Client
            
          </h1>
          <br/><br/>
          <ol style='color:white;' class="breadcrumb">
            <li style='color:white;'><a style='color:white;' href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li style='color:white;'><a style='color:white;' href="#">Local Database</a></li>
            <li style='color:white;' class="active">Create Client</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		
          <div class="row">
              
              
              
              
              
              
              
              
              
              
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>
<body>

<form style='margin-top:1%;' id="regForm" action="#" method="post" enctype="multipart/form-data">
    
    
    
    

<style>
    .column {
  float: left;
  width: 45%;
  padding-left:1%;
}

   .column22 {
  float: left;
  width: 45%;
  padding-left:3%;
}

  .column1 {
  float: left;
  width: 30%;
  margin-left:5%;
 
}

  .column2 {
  float: left;
  width: 70%;
  margin-left:-12%;
 
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

    
    

  <!-- One "tab" for each step in the form: -->
  <div class="tab"> 
    
    <div class='row'><div class='column'>
    
      <!-- text input -->
                    <div class="form-group">
                      <label>Company Name</label>
                      <input required  type="text" id="companyc" name="companyname" class="form-control" placeholder="Enter Company Name..."/>
                    </div>
                    
                    
    
    
    
                  <div class="form-group">
                      <label for="exampleInputFile">Country</label>
    
    
    
    
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
    
    
    
    
      <div class="form-group">
                     
    
    	<label class="text-label form-label">City</label>
														
														
														
															 <select id="city" class="form-control" name="cityname">
													<option value="0">Select City</option>
														
														
														
													</select>
													 </div>
    
    <div class="form-group">
                     
    
    	<label class="text-label form-label">Address</label>
														 <input type="text" name="location" value="" placeholder="Address"  class="form-control">
    
    
     </div>
    
    
    		
    
    
    			<div class="form-group">
                      <label>Website</label>
                   <input type="text" name="website" value="" placeholder="Website" required class="form-control"/>
                    </div>
					
    
    
    
	   <!-- phone mask -->
                  <div class="form-group">
                    <label>Phone:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      
                      <div class='row'><div class='column1'>
                      	<input class="form-control" style="background-color:#D3D3D3;" readonly  id="countrycode" name="countrycode" type="text"> 
                      	</div><div class='column2'>
                      <input required  type="text" name="phone"class="form-control"/>
                      </div></div>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                  
                  
					
				
					<div class="form-group">
                      <label>Established Year</label>
                      <input type="number" name="establishedyear" value="" placeholder="Established Year" required class="form-control"/>
                    </div>
    
    
    
    </div><div class='column22'>
    
               

			<div class="form-group">
			    
			    
                      <label>Activities</label>			 

	<label class="text-label form-label">Activities*</label>
														
		





				<br/>		<br/>							
											  
<input type="checkbox" name="activity[]" value="FIT">&nbsp;FIT &nbsp;
<input type="checkbox" name="activity[]" value="Leisure">&nbsp;Leisure&nbsp;
<input type="checkbox" name="activity[]" value="Groups">&nbsp;Groups&nbsp;
<input type="checkbox" name="activity[]" value="MICE">&nbsp;MICE &nbsp;
<input type="checkbox" name="activity[]" value="Cooperate">&nbsp;Cooperate


<br/><br/>



					
				
                    </div>
					
					<div class="form-group">
                     	<label class="text-label form-label">Staff Strength*</label>
														
														<input type="number" class="form-control" name="staffstrength" value="" placeholder="Staff Strength" >
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
												
												
						
													    
													    	<p id="listbranches">
															    
															</p>
															
										
												
    
  <div class="form-group">
                      <label for="exampleInputFile">Logo</label>
                        <input type='file' name="myfile" required id="exampleInputFile">
                      <p class="help-block">Upload Logo</p>
                    </div>
    
    
    
    

		</div></div>			


			

             


				
</div>







   
  
  </div>
  
  
   
 
 
 
 
 
    
				  
 
 
 
  <div style="margin-top:-5%; overflow:auto;">
    <div style="display:inline;">
      <button style='float:left; background-color:#EED202;' type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button style='float:right; background-color:#EED202;' type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
       <button style='float:right; background-color:#EED202;' type="submit" name='submit' id="smbBtn">Submit</button>
      
      
        
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="margin-top:-5%; text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
   
  
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";
      document.getElementById("smbBtn").style.display = "block";
    
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
     document.getElementById("smbBtn").style.display = "none";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


              
              
              
              
              
              
              
              
              
              
              
              
			
			
			
			
			
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
     

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>


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




<?php
include('footer.php');
?>





