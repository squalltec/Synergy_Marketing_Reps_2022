 <?php

session_start();

require_once "db_connection.php";




if (isset($_POST['submit'])) {
    
    
    
    
    
if($_SESSION['CFU']=='1'){

$CFU = isset($_POST['CFU']) ? "1" : "0";

}
else{
    $CFU='0';
}

if($_SESSION['CF']=='1'){


$CF = isset($_POST['CF']) ? "1" : "0";
}
else{
    $CF='0';
}

if($_SESSION['C']=='1'){
$C = isset($_POST['C']) ? "1" : "0";
}
else{
    $C='0';
}


if($_SESSION['CCC']=='1'){
$CCC = isset($_POST['CCC']) ? "1" : "0";
}
else{
    $CCC='0';
}

if($_SESSION['CC']=='1'){
$CC = isset($_POST['CC']) ? "1" : "0";
}
else{
    $CC='0';
}

if($_SESSION['COA']=='1'){
$COA = isset($_POST['COA']) ? "1" : "0";
}
else{
    $COA='0';
}


if($_SESSION['CA']=='1'){

$CA = isset($_POST['CA']) ? "1" : "0";
}
else{
    $CA='0';
}

if($_SESSION['VC']=='1'){

$VC = isset($_POST['VC']) ? "1" : "0";
}
else{
    $VC='0';
}
if($_SESSION['canDELL']=='1'){

$canDEL = isset($_POST['canDEL']) ? "1" : "0";
}
else{
    $canDEL='0';
}

    
    
    
    
    
    
    
    
    
    $address = $_POST['address'];
	
$title = $_POST['title'];

$role = 'staff';

$email =$_POST['email'];

$password =$_POST['password'];

$name = $_POST['name'];

$lastname = $_POST['lastname'];

$phone = $_POST['phone'];

$country = $_POST['country'];

$company = $_POST['company'];

$city = $_POST['city'];

$birthday =$_POST['birthday'];

$website =$_POST['website'];

$relevantinformation =$_POST['relevantinformation'];

$interests =$_POST['interests'];

$designation =$_POST['designation'];

$likesdislikes =$_POST['likesdislikes'];


		
		
	  $filename = $_FILES['myfile']['name'];
	  $destination = 'Fuser Images/' . $filename;
	  $extension = pathinfo($filename, PATHINFO_EXTENSION);
	  $file = $_FILES['myfile']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {




$sql ="INSERT INTO users (title,name,lastname, email,password,country,city,birthday, company, phone, website, relevantinformation,image,role,interests,likesdislikes,CFU,CF,C,CCC,CC,COA,CA,VC,canDEL,address,designation ) VALUES ('$title','$name','$lastname', '$email', '$password','$country','$city','$birthday','$company','$phone','$website','$relevantinformation','$filename','$role','$interests','$likesdislikes','$CFU','$CF','$C','$CCC','$CC','$COA','$CA','$VC','$canDEL','$address','$designation')";

 $result = $conn->query($sql);


if ($result === TRUE) {
    
   
$_SESSION['ownerrname']=$name;
$_SESSION['ownerrcompany']=$company;
$_SESSION['ownerrcountry']=$country;
$_SESSION['ownerrcity']=$city;
$_SESSION['ownerrwebsite']=$website;
$_SESSION['ownerremail']=$email;

$_SESSION['ownerrtitle']=$title;
$_SESSION['ownerrphone']=$phone;

$_SESSION['ownerraddress']=$address;


   
   $_SESSION['sendmail']=$email;
    $_SESSION['sendbmail']=$email;
    $_SESSION['sendbpassword']=$password;
   
   

$_SESSION['ownername']='';
$_SESSION['ownercompany']='';
$_SESSION['ownercountry']='';
$_SESSION['ownercity']='';
$_SESSION['ownerwebsite']='';

$_SESSION['owneremail']='';

$_SESSION['ownercode']='';
$_SESSION['ownertitle']='';
   
   
   
header('Location: testmail_owner.php');
   
   
    
 
} else {
    
    
 echo "Error: " . $sql . "<br>" . $conn->error;
}




		}
}

 
include('header_owner.php');

 
 
 
$titlee=$_SESSION['ownertitle'];

$naamee=$_SESSION['ownername'];
$ocompany=$_SESSION['ownercompany'];
$ocountry=$_SESSION['ownercountry'];
$ocity=$_SESSION['ownercity'];
$owebsite=$_SESSION['ownerwebsite'];

$oemail=$_SESSION['owneremail'];

$ocode=$_SESSION['ownercode'];

$cctt='';


   $resultta=mysqli_query($conn,"SELECT * FROM countries WHERE id='$ocountry'"); 
                while($rowa=mysqli_fetch_assoc($resultta)) { 
                    $cctt=$rowa['name'];
                } 











 ?>
 
 
 
   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section style='background-color:#222;' class="content-header">
          <h1 style='float:left; color:white;' >
            Create Franchisee User
            
          </h1>
          <br/> <br/>
          <ol style='color:white;' class="breadcrumb">
            <li  style='color:white;' ><a  style='color:white;' href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li  style='color:white;' ><a  style='color:white;' href="#">Franchisee</a></li>
            <li  style='color:white;'  class="active">Create Franchisee User</li>
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

  <!-- One "tab" for each step in the form: -->
 
  <div class="tab"> 
  
  
  
  
  
  <style>
      .column {
  float: left;
  width: 45%;
  padding-left:1%;
   padding-right:1%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
  </style>
  
  
  
  
  
  
  
  <div class='row'>
  <div class='column'>
  
  <div style='' class="form-group">
      	<label class="text-label form-label">Company*</label>
			<input id="company" readonly type="text" name="company" class="country form-control" value='<?php echo $_SESSION['company'];?>' placeholder="Enter Company..."/>												 
										
  </div>
  
  
  
  <div class="form-group">
      	<label class="text-label form-label">Country</label>
														
														
														<input id="country" type="text" name="country"class="country form-control" readonly value='<?php echo $_SESSION['ucountry'];?>' placeholder="Enter Country..."/>
  </div>
  
  <div class='form-group'>
      	<label class="text-label form-label">City*</label>
														<input  id="city" readonly name="city"type="text" class="form-control"  value='<?php echo $_SESSION['ucity'];?>' placeholder="Enter City..."/>
  </div>
  
  
  <div class='form-group'>
      	<label class="text-label form-label">Website</label>
														<input id="website" readonly  type="text" name="website" class="form-control"  value='<?php echo $_SESSION['user_website'];?>' placeholder="Enter Website..."/>
  </div>
  
  
  	<div class="form-group">
												<label class="text-label form-label">Address</label>
												<input   name="address"type="text" class="form-control"/>
												</div>
  
 
  
   <div class='form-group'>
   	<label class="text-label form-label">Role</label>
   <select id='forr' class='form-control'  name='forr'>
       <option value="hr">Human Resource</option>
       <option value="account">Accounts</option>
       <option value="sales">Sales</option>
   </select>
   
    </div>
    
    	<div class='form-group'>
														<label class="text-label form-label">Designation</label>
														<input required type="text" name="designation" id="designation" class="form-control" placeholder="Enter Designation..."/>
													</div>
											
											
											
												
												  
												
												</div>
												
												<div class='column'>
												    
												    
                       	<div class='form-group'>
												        
												    <label class="text-label form-label">Title</label>
												    <select class="form-control" name="title">
												        
												       
												        
												        
												        <option>Mr.</option><option>Mrs.</option><option>Miss.</option><option>Dr.</option><option>Prof.</option></select>
												
												        
												        </div>
											
												
												<div class='form-group'>
														<label class="text-label form-label">First Name</label>
														<input required type="text" name="name" id="name" class="form-control" value='<?php echo $naamee;?>' placeholder="Enter Name..."/>
													</div>
										
										
											<div class='form-group'>
														<label class="text-label form-label">Last Name</label>
														<input required type="text" name="lastname" id="lastname" class="form-control" value='' placeholder="Enter Last Name..."/>
													</div>
										
											
											
											
												
												<div class="form-group">
														<label class="text-label form-label">Mobile Number*</label>
														 <input id="phone" value='<?php echo $ocode;?>' type="text" name="phone"class="form-control"/>
											
												</div>
												
												<div class="form-group">
														<label class="text-label form-label">Personal Email*</label>
													   <input value='<?php echo $oemail;?>' id='email' name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
											
												</div>
												
													<div class="form-group">
														<label class="text-label form-label">Password*</label>
													   <input   name="password" type="password" class="form-control" id="password" placeholder="Enter Password">
											
												</div>
												
												  <div class="form-group">
														<label class="text-label form-label">Birthday	</label>
														 <input   name="birthday"type="date" class="form-control"/>
												
												</div>
														
											
										
                                                  
												
												
											
											
											
												
                 
                 
                 
                 
                  
                 
												
													
											

                  	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                

<script>
document.getElementById('files').onchange = function () {
  var src = URL.createObjectURL(this.files[0])
  document.getElementById('dp').src = src
}

</script>
             
             </div></div>       
             
             
             	<div class='form-group'>
										<label class="text-label form-label">Upload Image*</label>
                                         
                                                 <img id="dp" class="w3-circle" alt="" style="width:4%">
		
					<input accept="image/*" class='form-control' name="myfile" type="file" id="files" />

</div>
             
             <div class="form-group">
														<label class="text-label form-label">Relevant Information*</label>
														 <textarea name="relevantinformation" class="form-control" rows="3" placeholder="Enter Relevant Information..."></textarea>
													
												</div>
             
      		
											 <div class="form-group">
														<label class="text-label form-label">Likes Dislikes*</label>
														<textarea name="likesdislikes" class="form-control" rows="3" placeholder="Enter Likes and Dislikes..."></textarea>
												
												</div>
												
												 <div class="form-group">
														<label class="text-label form-label">Interests*</label>
														<textarea name="interests" class="form-control" rows="3" placeholder="Enter Interests..."></textarea>
												
												</div>
												       
             
             
             
             
             
  </div>
  
  
  
  <div class="tab">
  
  
  
  
  
  
  
                   <div class="form-group">
                       
                      
                      
                      
                      
      <input type='checkbox' id='checker'/>Admin Permissions
  
  
  
  
                   
                   
                   
                   
                   
                   
      <input type='checkbox' id='checker2'/>Sales Permissions
  
  
  
                      
                   
                   
                   
                   
                   
                  
      <input type='checkbox' id='checker3'/>Accounts Permissions
  
  
  
  
              
                   
                   
               <br/>      <br/>
                      
                      
         <button class="btn btn-primary" style='background-color:gold;' type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
   Additional Permissions
  </button>             
           <br/>        <br/>   
           <div class="collapse" id="collapseExample2">
  <div class="card card-body">
  
  
                     <label class='CFU'>Create Staff</label>
   
    <input name='CFU' class='CFU' id='sa' type='checkbox'>
    

 
                     <label class='CF' style='display:none;'>Create Franchisee</label>
              

    <input style='display:none;' class='CF' name='CF' id='sa1' type='checkbox'>
    
    
        
                     <label class='C'>Contracts</label>

    
    <input name='C' class='C' id='sa2' type='checkbox'>
    
        
 

                     <label class='CCC'>Create Client Company</label>
 
    <input name='CCC'  class='CCC' id='sa3' type='checkbox'>

 
                     <label class='CC'>Create Customer</label>
 
    <input name='CC' class='CC' id='sa4' type='checkbox'>
    
 
                     <label class='COA'>Create Company Appointments</label>
 
    
    <input name='COA' class='COA' id='sa5' type='checkbox'>
 

 
                     <label class='CA'>Create Client Appointments</label>

 
    
    <input name='CA' class='CA' id='sa6' type='checkbox'>
     
                     <label class='VC'>Video Chat</label>
    
    <input name='VC' class='VC' id='sa7' type='checkbox'>
   
                     <label class='canDEL'>Can Delete?</label>
    
    <input name='canDEL' class='canDEL' id='sa8' type='checkbox'>
    
  
  
  
  
  
  </div>
</div>           
                      
           
    
      </div>
                  
  
        
                  
  </div>
  
  
  
  
  
  
    

 
 
  <div style="overflow:auto;">
    <div style="display:inline;">
      <button style='float:left; background-color:#EED202;' type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button style='float:right; background-color:#EED202;' type="button" id="nextBtn" onclick="nextPrev(1)">Next</button><br/>
      <button style='float:right; background-color:#EED202;' type="submit" name='submit' id="smbBtn">Submit</button>
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
      document.getElementById("smbBtn").style.display = "none";
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
      
      <input style='display:none;' id='CCCid' value='<?php echo $_SESSION['CCC']; ?>'>
      <input style='display:none;' id='CFid' value='<?php echo $_SESSION['CF']; ?>'>
      <input style='display:none;' id='CFUid' value='<?php echo $_SESSION['CFU']; ?>'>
      <input style='display:none;' id='Cid' value='<?php echo $_SESSION['C']; ?>'>
      <input style='display:none;' id='CCid' value='<?php echo $_SESSION['CC']; ?>'>
      <input style='display:none;' id='COAid' value='<?php echo $_SESSION['COA']; ?>'>
      <input style='display:none;' id='CAid' value='<?php echo $_SESSION['CA']; ?>'>
      <input style='display:none;' id='VCid' value='<?php echo $_SESSION['VC']; ?>'>
      <input style='display:none;' id='canDELLid' value='<?php echo $_SESSION['canDELL']; ?>'>
      
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>

$(document).ready(function (){

if($('#CCCid').val()=='0')
{
    
    var a= document.getElementsByClassName("CCC");
    a[0].style.display = "none";
    a[1].style.display = "none";
}
    
    
 if($('#CFUid').val()=='0')
{
    
    var a= document.getElementsByClassName("CFU");
    a[0].style.display = "none";
    a[1].style.display = "none";
}
      
    
 if($('#Cid').val()=='0')
{
    
    var a= document.getElementsByClassName("C");
    a[0].style.display = "none";
    a[1].style.display = "none";
}


 if($('#CCid').val()=='0')
{
    
    var a= document.getElementsByClassName("CC");
    a[0].style.display = "none";
    a[1].style.display = "none";
}

 if($('#COAid').val()=='0')
{
    
    var a= document.getElementsByClassName("COA");
    a[0].style.display = "none";
    a[1].style.display = "none";
}

 if($('#CAid').val()=='0')
{
    
    var a= document.getElementsByClassName("CA");
    a[0].style.display = "none";
    a[1].style.display = "none";
}

 if($('#VCid').val()=='0')
{
    
    var a= document.getElementsByClassName("VC");
    a[0].style.display = "none";
    a[1].style.display = "none";
}

 if($('#canDELLid').val()=='0')
{
    
    var a= document.getElementsByClassName("canDELL");
    a[0].style.display = "none";
    a[1].style.display = "none";
}

});













$('#checker').click(function(event) {  
    
    var checker= document.getElementById('checker');
        var checker2= document.getElementById('checker2');
         var checker3= document.getElementById('checker3');
    var sa= document.getElementById('sa');
    var sa1= document.getElementById('sa1');
    var sa2= document.getElementById('sa2');
 var sa3= document.getElementById('sa3');
  var sa4= document.getElementById('sa4');
   var sa5= document.getElementById('sa5');
    var sa6= document.getElementById('sa6');
     var sa7= document.getElementById('sa7');
      var sa8= document.getElementById('sa8');
     
    
    
 
    
    if (checker.checked==true){
        
        
           
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
  allowOutsideClick: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "This will give Admin Access to User",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, Allow',
  cancelButtonText: 'No, cancel',
  reverseButtons: true
}).then((result) => {
    
    
    
    
  if (result.isConfirmed) {
      
      
       checker2.checked=true;
    checker3.checked=true;
     
  sa.checked=true;
 sa1.checked=true;
  sa2.checked=true;
  sa3.checked=true;
 sa4.checked=true;
  sa5.checked=true;
  sa6.checked=true;
 sa7.checked=true;
 sa8.checked=true;
      
      
      
    swalWithBootstrapButtons.fire(
      'Allowed!',
      'Permission is Given',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
      
       checker.checked=false;
      
      
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Access is not given',
      'error'
    )
    
    
  }
})
        
    
}
else{
    
    
     
           
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
  allowOutsideClick: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "This will give Revoke Admin Access from User",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, Allow',
  cancelButtonText: 'No, cancel',
  reverseButtons: true
}).then((result) => {
    
    
    
    
  if (result.isConfirmed) {
      
      
     
    checker2.checked=false;
    checker3.checked=false;
 sa.checked=false;
 sa1.checked=false;
 sa2.checked=false;
   sa3.checked=false;
 sa4.checked=false;
  sa5.checked=false;
  sa6.checked=false;
 sa7.checked=false;
 sa8.checked=false;
      
      
      
    swalWithBootstrapButtons.fire(
      'Revoked!',
      'Permission is Revoked',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
      
      checker.checked=true;
      
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Access is not revoked',
      'error'
    )
    
    
  }
})



}
    

     
     
     
     
});






$('#checker2').click(function(event) {  
    
   
     
       var checker2= document.getElementById('checker2');
   
 var sa3= document.getElementById('sa3');
  var sa4= document.getElementById('sa4');
   var sa5= document.getElementById('sa5');
    var sa6= document.getElementById('sa6');
     var sa7= document.getElementById('sa7');
     
    
    if (checker2.checked==true){
  
 
 
 
 
 
           
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
  allowOutsideClick: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "This will give Sales, Meetings, Appointments and Video Chat Access to User",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, Allow',
  cancelButtonText: 'No, cancel',
  reverseButtons: true
}).then((result) => {
    
    
    
    
  if (result.isConfirmed) {
      
      
       checker2.checked=true;
    
     
 
  sa3.checked=true;
 sa4.checked=true;
  sa5.checked=true;
  sa6.checked=true;
 sa7.checked=true;

      
      
    swalWithBootstrapButtons.fire(
      'Allowed!',
      'Permission is Given',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
      
       checker2.checked=false;
      
      
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Access is not given',
      'error'
    )
    
    
  }
})
   
 
}
else{
    
    
    
   
           
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
  allowOutsideClick: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "This will give Revoke Sales, Meetings, Appointments and Video Chat Access to User",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, Revoke',
  cancelButtonText: 'No, cancel',
  reverseButtons: true
}).then((result) => {
    
    
    
    
  if (result.isConfirmed) {
      
      
       checker2.checked=false;
    
     
 
  sa3.checked=false;
 sa4.checked=false;
  sa5.checked=false;
  sa6.checked=false;
 sa7.checked=false;

      
      
    swalWithBootstrapButtons.fire(
      'Revoked!',
      'Permission is Revoked',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
      
       checker2.checked=true;
      
      
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Access is not Revoked',
      'error'
    )
    
    
  }
})
   
 
 
}
    

     
     
     
     
});


$('#checker3').click(function(event) {  
    
  
     
});






 var p="";
 var pp="";
 var ppp="";
 
 
 
 
 
 
 
 
 
 
    $("#company").on('change', function() {
        
	var	compy1 = $("#company").val();
	
    	

	
	  $.ajax({
              type:'POST',
              url:'getfusercountry.php',
              data:{'compy1':compy1},
              success:function(result){
                 
                 p=result;
                 
	
                 
                   $('.country').val(p);
                
                  
                 
              }
               
          }); 
          
          
          
          
	  $.ajax({
              type:'POST',
              url:'getfusercity.php',
              data:{'compyy1':compy1},
              success:function(result){
                 
                 pp=result;
                 
	
                 
                   $('#city').val(pp);
                
                  
                 
              }
               
          }); 
          
          
          
          
          $.ajax({
              type:'POST',
              url:'getfuserwebsite.php',
              data:{'compyyy1':compy1},
              success:function(result){
                 
                 ppp=result;
                 
	
                 
                   $('#website').val(ppp);
                
                  
                 
              }
               
          }); 
          
          
          
               
	  $.ajax({
              type:'POST',
              url:'getfuserphonecode.php',
              data:{'compyyyy1':compy1},
              success:function(result){
                 
               
                p=parseInt(result, 10);
              
              
               
               $('#phone').val("+"+p);
             
                  
                 
              }
             
          }); 
          
		  
		  
		 
		 
		  	
           
           
		  
		
	
})







   $("#lastname").on('change', function() {
	
	
	var na= $("#name").val();
	var na2= $("#lastname").val();
	var co= $("#company").val();
	var forr= $("#designation").val();
	var con= $("#country").val();
	


	
	 $.ajax({
              type:'POST',
              url:'validatefuser.php',
              data:{'co':co,'na':na,'na2':na2,'forr':forr,'con':con},
              success:function(result){
                
                var ch= String(result);
               
               if (!$.trim(result)){ }
                      else{
          
         Swal.fire(
  'Already Exists!',
  'Same Name, Designation Staff Already Exist',
  'error'
) 
                     
	$("#name").val('');
	 
                      }
                 
                      
                  }
                 
                 
          }); 
 
 
   })














 
   $("#email").on('change', function() {
	
	
	var co= $("#email").val();
	
	
	 $.ajax({
              type:'POST',
              url:'validateemail.php',
              data:{'co':co},
              success:function(result){
                
                var ch= String(result);
               
               if (!$.trim(result)){ }
                      else{
            Swal.fire(
  'Already Exists!',
  'Email is Already Taken',
  'error'
)
                     
	 $("#email").val("");
	 
                      }
                 
                      
                  }
                 
                 
          }); 
	
	
	
	
	
	
	
	
	
	
	

	
   });
 
 







</script>

     <?php
include('footer.php');
?>