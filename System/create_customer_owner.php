 <?php

include('header_owner.php');




require_once "db_connection.php";

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















$sql ="INSERT INTO customer (title,name, email,password,username,country,city,birthday,zoom, company, phone, designation, department, website, relevantinformation,image,role,interests,likesdislikes,createdbycompanyid,createdbyname ) VALUES ('$title','$name', '$email', '$password', '$username','$country','$city','$birthday','$zoom','$company','$phone','$designation','$department','$website','$relevantinformation','$filename','$role','$interests','$likesdislikes','$createdbyid','$createdbyname')";

 $result = $conn->query($sql);


if ($result === TRUE) {
    
   echo ("<script>location.href='decider_owner.html'</script>");
   
    
 
} else {
 
}




		}
}

 


 
 ?>
 
 
 
   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section style='background-color:#222;' class="content-header">
          <h1 style='float:left; color:white;' >
            Create Customer
            
          </h1>
          <br/><br/>
          <ol style='color:white;' class="breadcrumb">
            <li  style='color:white;' ><a  style='color:white;' href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li  style='color:white;' ><a  style='color:white;' href="#">Customers</a></li>
            <li  style='color:white;'  class="active">Create Customer</li>
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
<body >

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
  
  
  <div class="form-group">
      <br/>
      	<label class="text-label form-label">Company*</label>
														 
														 <select class='form-control' id="company" name="company">
                   <option>Select Company</option>
            <?php 
               $mycom= $_SESSION['company'];
               
                $resultta=mysqli_query($conn,"SELECT * FROM office WHERE companyname='$mycom'"); 
                while($rowa=mysqli_fetch_assoc($resultta)) { 
                    $achaid=$rowa['id'];
                }
                
                
                $resultt=mysqli_query($conn,"SELECT id,companyname FROM local_company WHERE createdbycompanyid='$achaid'"); 
                while($row=mysqli_fetch_assoc($resultt)) { 
                    echo "<option value='$row[companyname]'>$row[companyname]</option>"; 
                } 
            ?> 
                </select> 
  </div>
  
  
  
  <div class="form-group">
      	<label class="text-label form-label">Country</label>
														
														
														<input id="country" type="text" name="country"class="country form-control" placeholder="Enter Country..."/>
  </div>
  
  <div class='form-group'>
      	<label class="text-label form-label">City*</label>
														<input  id="city" name="city"type="text" class="form-control" placeholder="Enter City..."/>
  </div>
  
  
  <div class='form-group'>
      	<label class="text-label form-label">Website</label>
														<input id="website"  type="text" name="website" class="form-control" placeholder="Enter Website..."/>
  </div>
  
  
  
  
  	<div class='form-group'>
														<label class="text-label form-label">Designation*</label>
														
														<input id="designation" name="designation" type="text" class="form-control" placeholder="Enter Designation..."/>
											
												</div>
												
												<div class='form-group'>
														<label class="text-label form-label">Department*</label>
														
														 <input id="department" name="department" type="text" class="form-control" placeholder="Enter Department..."/>
													</div>
													
													
                                                    <div class="form-group">
														<label class="text-label form-label">Relevant Information*</label>
														 <textarea name="relevantinformation" class="form-control" rows="3" placeholder="Enter Relevant Information..."></textarea>
													
												</div>
												
  
  </div><div class='column22'>
                  

    
												<div class='form-group'>
												        
												    <label class="text-label form-label">Title</label>
												    <select class="form-control" name="title"><option>Mr.</option><option>Mrs.</option><option>Miss.</option><option>Dr.</option><option>Prof.</option></select>
												
												        
												        </div>
											
												
												<div class='form-group'>
														<label class="text-label form-label">Name</label>
														<input   type="text" name="name" id="name" class="form-control" placeholder="Enter Name..."/>
													</div>
										
											
											
											
												<div class="form-group">
														<label class="text-label form-label">Mobile Number*</label>
														 <input id="phone" type="text" name="phone"class="form-control"/>
											
												</div>
												
												<div class="form-group">
														<label class="text-label form-label">Email*</label>
													   <input   name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
											
												</div>
												
												
												  <div class="form-group">
														<label class="text-label form-label">Birthday	</label>
														 <input   name="birthday"type="date" class="form-control"/>
												
												</div>
														
											 <div class="form-group">
														<label class="text-label form-label">Likes Dislikes*</label>
														<textarea name="likesdislikes" class="form-control" rows="3" placeholder="Enter Likes and Dislikes..."></textarea>
												
												</div>
												
												 <div class="form-group">
														<label class="text-label form-label">Interests*</label>
														<textarea name="interests" class="form-control" rows="3" placeholder="Enter Interests..."></textarea>
												
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
												
                 
                 
                 
                 
                  
                 
												
													
												<div class='form-group'>
										<label class="text-label form-label">Upload Image*</label>
                                         
                                                 <img id="dp" class="w3-circle" alt="" style="width:4%">
		
					<input accept="image/*" class='form-control' name="myfile" type="file" id="files" />

</div>

</div></div>
 
                  	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                  <div class="box-footer">
                    <input required  style=" background-color:gold; float:right;"type="submit" name="submit" value="Submit"class="btn btn-primary">
                  </div>

<script>
document.getElementById('files').onchange = function () {
  var src = URL.createObjectURL(this.files[0])
  document.getElementById('dp').src = src
}

</script>
      
                     

 </div>
 




   
  
  </div>
  
  
   
 
 
 
 
 
 
 
 
 
  <div style="margin-top:-4%; overflow:auto;">
    <div style="float:right;">
      <button style='background-color:#EED202;' type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button style='background-color:#EED202;' type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="margin-top:-4%; text-align:center;margin-top:40px;">
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
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
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
              
              
               
               $('#phone').val("+"+p);
             
                  
                 
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






   $("#name").on('change', function() {
	
	
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

     <?php
include('footer.php');
?>