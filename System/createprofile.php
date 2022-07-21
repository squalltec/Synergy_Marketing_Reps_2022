 <?php
 session_start();
include('header.php');


require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}





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








$sql ="INSERT INTO users (name, email,password,username,country,city,birthday,zoom, company, phone, designation, department, website, relevantinformation,image,role,CFU,CF,C,CCC,CC,COA,CA,VC,canDEL ) VALUES ('$name', '$email', '$password', '$username','$country','$city','$birthday','$zoom','$company','$phone','$designation','$department','$website','$relevantinformation','$image','$role','$CFU','$CF','$C','$CCC','$CC','$COA','$CA','$VC',$DEL)";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




}

 
 ?>
 
 
 
   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Create Profile
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Ts Head Office</a></li>
            <li class="active">Create Profile</li>
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

<form id="regForm" action="#" method="post" enctype="multipart/form-data">

  <!-- One "tab" for each step in the form: -->
  <div class="tab"> <p style="font-size:1.2em;">Role:</p>
    
                       
<input required  type="radio" name="forr" value="owner" /> Owner

<input required  type="radio" name="forr" value="partner" /> Partner

<input required  type="radio" name="forr" value="staff" /> Staff

                     
  </div>
  
  
  
  
  
  <div class="tab"> Permissions
  
  
  
  
  
  
  
                   <div class="form-group">
                   
                     
                     </br>
                     <label>Create Franchisee Users</label>
   
    <input name='CFU' type='checkbox'>
    

 </br>
                     <label>Create Franchisee</label>
              

    <input name='CF' type='checkbox'>
    
    
         </br>
                     <label>Contracts</label>

    
    <input name='C' type='checkbox'>
    
        
 </br>
                     <label>Create Client Company</label>
 
    <input name='CCC' type='checkbox'>

 </br>
                     <label>Create Customer</label>
 
    <input name='CC' type='checkbox'>
    
  </br>
                     <label>Create Company Appointments</label>
 
    
    <input name='COA' type='checkbox'>
 

 </br>
                     <label>Create Client Appointments</label>

 
    
    <input name='CA' type='checkbox'>
     </br>
                     <label>Video Chat</label>
    
    <input name='VC' type='checkbox'>
    </br>
                     <label>Can Delete?</label>
    
    <input name='DEL' type='checkbox'>
    
    
      </div>
                  
                  
                  
                  
                  
  </div>
  
  
  
  
  
  
  
  
    <div class="tab"> Personal Information
    
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
					
					
					
					   <!-- text input -->
                    <div class="form-group">
                      <label>Name</label>
                      <input required  type="text" name="name" class="form-control" placeholder="Enter Name..."/>
                    </div>
                    
					
					   <!-- phone mask -->
                  <div class="form-group">
                    <label>Phone:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input required  type="number" name="phone"class="form-control"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

					<div class="form-group">
                      <label>Country</label>
                      <input required  type="text" name="country"class="form-control" placeholder="Enter Country..."/>
                    </div>
					
					
		
					
					
					<div class="form-group">
                      <label>City</label>
                      <input required  name="city"type="text" class="form-control" placeholder="Enter City..."/>
                    </div>
					
					
				
					
					<div class="form-group">
                      <label>Birthday</label>
                      <input required  name="birthday"type="date" class="form-control"/>
                    </div>
					
				
					
					
					
					
					
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Relevant Information</label>
                      <textarea name="relevantinformation" class="form-control" rows="3" placeholder="Enter Relevant Information..."></textarea>
                    </div>
                   


                     
  </div>
    
 
 
  <div class="tab"> Company Information
  
  
  <div class="form-group">
                      <label>Company: </label>		
  <select name="company">
                    <option value=''>-----SELECT Company-----</option>
            <?php 
                
                $resultt=mysqli_query($conn,"SELECT id,companyname FROM office WHERE DEL='0'"); 
                while($row=mysqli_fetch_assoc($resultt)) { 
                    echo "<option value='$row[companyname]'>$row[companyname]</option>"; 
                } 
            ?> 
                </select> 
 
 
					</div>

	
					<div class="form-group">
                      <label>Department</label>
                      <input required  name="department" type="text" class="form-control" placeholder="Enter Department..."/>
                    </div>
					

			
					
			
					
					
					
					<div class="form-group">
                      <label>Designation</label>
                      <input required  name="designation" type="text" class="form-control" placeholder="Enter Designation..."/>
                    </div>
  
  					
  <div class="form-group">
                      <label>Website</label>
                      <input required  name="website"type="text" class="form-control" placeholder="Enter Website..."/>
                    </div>
					
					<div class="form-group">
                      <label>Zoom ID</label>
                      <input required  name="zoom" type="text" class="form-control" placeholder="Enter Zoom Id..."/>
                    </div>
				
</div>

<div class="tab"> Login Information
   
   
    
				         <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input required  name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
					
<div class="form-group">
                      <label>Username</label>
                      <input required  type="text" name="username"class="form-control" placeholder="Enter Username..."/>
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input required  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
					
					<div class="box-footer">
                    <input required  style="float:right;"type="submit" name="submit" value="Submit"class="btn btn-primary">
                  </div>
					
					
   </div>


   
  
  </div>
  
  
   
 
 
 
 
 
 
 
 
 
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
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
    document.getElementById("nextBtn").innerHTML = "Submit";
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
     