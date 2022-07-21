<?php 

session_start();
require_once "db_connection.php";

if (isset($_POST['submit'])) {
    
    
    
    
   $saddress= isset($_POST['saddress']) ? "1" : "0"; 
   $sphone= isset($_POST['sphone']) ? "1" : "0"; 
    
    
    
    if($saddress=='1')
    {
     $_SESSION['saddress']=$_POST['location'];
    }
    else{
         $_SESSION['saddress']='';
    }
    if($sphone=='1'){
      $_SESSION['sphone']=$_POST['phone'];
    }
    else{
         $_SESSION['sphone']='';
    }
    
    
    
    
    
    
  
$title = $_POST['title'];
$companyname = $_POST['companyname'];
$countryname = $_POST['countryname'];
$cityname = $_POST['cityname'];
$location = $_POST['location'];
$countrycodee = $_POST['countrycode'];
$phonee = $_POST['phone'];
$phone=$countrycodee.(string) $phonee;
$website =$_POST['website'];
$email =$_POST['email'];
$owner =$_POST['owner'];
$ownerlast =$_POST['ownerlast'];


if($companyname==""||$countryname==""||$cityname==""||$location==""){
    
    echo "<script>swal('Please Enter Company, Country, City and Location Properly');</script>";
}
    
    
    else{

    
    

	
		
	  $filename = $_FILES['myfile']['name'];
	  $destination = 'General Lisences/' . $filename;
	  $extension = pathinfo($filename, PATHINFO_EXTENSION);
	  $file = $_FILES['myfile']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
			
$sql ="INSERT INTO office (companyname, companyemail,country,city,address,title,owner,ownerlast,logo,phone,website ) VALUES ('$companyname', '$email','$countryname','$cityname','$location','$title','$owner','$ownerlast','$filename','$phone','$website')";

 $result = $conn->query($sql);


if ($result === TRUE) {
  //echo "New record created successfully";
  
  $_SESSION['sendbmail']=$email;
   $_SESSION['owneremail']=$companyemail;
   $_SESSION['ownercode']=$countrycodee;
  $_SESSION['ownercompany']=$companyname;
  $_SESSION['ownername']=$owner;
   $_SESSION['ownerlastname']=$ownerlast;
   $_SESSION['ownercountry']=$countryname;
    $_SESSION['ownercity']=$cityname;
     $_SESSION['ownerwebsite']=$website;
      $_SESSION['subdomain']=$website;
      $_SESSION['ownertitle']=$title;
      
      $_SESSION['ownerdesignation']='Managing Director';
      
      
    
      
     
      
      
      
      $_SESSION['comingfromoffice']='true';
      
  
  header('Location: createfuser.php');
  
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

		}

    
    
    

}

}



include('header.php');


if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}
?>















 
 
   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section style='background-color:#222;' class="content-header">
          <h1 style='float:left; color:white;'>
            Create Franchise Company
            
          </h1>
          <br/><br/>
          <ol style='color:white;' class="breadcrumb">
            <li style='color:white;'><a style='color:white;' href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li style='color:white;'><a style='color:white;' href="#">TS-Head Office</a></li>
            <li style='color:white;' class="active">Create Franchisee</li>
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

  <!-- One "tab" for each step in the form: -->
  <div class="tab"> 
    
    <style>
    .column212 {
  float: left;
 
}
        .column21 {
  float: left;
  width:42%;
  margin-left:10px;
  
}


        .column {
  float: left;
  width: 47%;
  margin-left:10px;
}

 .column1 {
  float: left;
  width: 20%;
margin-left:5%;
}

 .column2 {
  float: left;
  width: 70%;
  
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
      <!-- text input -->
      
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
                      <label>Company Name</label>
                      <input required  type="text" id="companyc" name="companyname" class="form-control" placeholder="Enter Company Name..."/>
                    </div>
                    
                    
                    
                  
                       
                    
	   <!-- phone mask -->
                  <div class="form-group">
                    <label>Company Phone:</label>
                    
                    
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                                    
<div class='row'>
    <div class='column1'>
                      	<input class="form-control" style="background-color:#D3D3D3;" readonly  id="countrycode" name="countrycode" type="text"> 
                      </div>
                      
                      	<div class='column2'>
                      <input required  type="text" name="phone"class="form-control"/>
                      </div></div>
                    </div><!-- /.input group -->
                    
                 
                        
                  
                  </div><!-- /.form group -->
                  
                     
        <div class="form-group">
                     
    <input style='float:right; width: 15px;
            height: 15px;' id='sphone' name='sphone' type='checkbox'>
    	<label style='float:right;' class="text-label form-label">&nbsp;&nbsp;&nbsp; Same as Personal Number &nbsp;</label>
                  
                  <br/>
                  
                  </div>
                    
                    <div class="form-group">
                      <label>Personal Website</label>
                   <input type="text" name="pwebsite" value="" placeholder="Personal Website" required class="form-control"/>
                    </div>
			
		
    
    
			
			
                       
                    
    
                 
    
    
    
    
      
    

    		
    </div>
    
    <div class='column'>
    
    
    
    <div class="form-group">
                     
    
    	<label class="text-label form-label">City</label>
														
														
														
															 <select id="city" class="form-control" name="cityname">
													<option value="0">Select City</option>
														
														
														
													</select>
													 </div>
    
    
    
    
    
    	<div class="form-group">
                     	<label class="text-label form-label">Business Email*</label>
														
														<input type="email" class="form-control" name="email" value="" placeholder="Company Email" >
                    </div>
							
							
    
        <div class="form-group">
                     
    
    	<label class="text-label form-label">Company Address</label>
														 <input type="text" name="location" value="" placeholder="Address"  class="form-control">
    
    </div>
    
    
        <div class="form-group">
                     
    <input style='float:right; width: 15px;
            height: 15px;' name='saddress' id='saddress' type='checkbox'>	
    	<label style='float:right;' class="text-label form-label">Same as Personal Address &nbsp;</label>
    
    		<br/>
    			</div>
    			
    			<div class="form-group">
                      <label>Business Website</label>
                   <input type="text" name="website" value="" placeholder="Website" required class="form-control"/>
                    </div>
			
    
    
    
    
					
						
												
    
    

					

</div>





<div style='margin:0 auto; margin-left:10px;  margin-right:30px;' class='columnz1'>
      <div class="form-group">
                      <label for="exampleInputFile">Logo</label>
                        <input type='file' name="myfile" required id="exampleInputFile">
                      <p class="help-block">Upload Logo</p>
                    </div>
</div>


</div>
			

	
			

    

 <div class='row'>
     <div style='margin-left:10px;' class='column212'>
     

 <div class="form-group">
                      <label>Title</label>
                    <select class='form-control' name='title'>
                        <option  align='center'>Mr.</option>
                         <option  align='center'>Mrs.</option>
                          <option  align='center'>Miss.</option>
                           <option  align='center'>Dr.</option>
                            <option  align='center'>Prof.</option>
                    </select>
                    </div>
 
 
</div>
     <div class='column21'>
     
     
       
      <!-- text input -->
                    <div class="form-group">
                      <label>First Name</label>
                      <input required  type="text" id="owner" name="owner" class="form-control" placeholder="First Name"/>
                    </div>
                    
   
     
     </div>
     <div  class='column21'>
         
         
         
                          
     <div class="form-group">
                      <label>Last Name</label>
                      <input required  type="text" id="ownerlast" name="ownerlast" class="form-control" placeholder="Last Name"/>
                    </div>
                    
    
    
     </div></div>
















             


				
</div>






  <div style=" margin-right:10px; overflow:auto;">
    <div style="display:inline;">
      <button style='float:left; background-color:#EED202;' type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button style='float:right; background-color:#EED202;' type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
       <button style='display:none !important; float:right; background-color:#EED202;' type="submit" name='submit' id="clickme">Submit</button>
      <button type='button' onclick='pope()' id='popme' style='float:right; background-color:#EED202;'>Submit</button>
      
        
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->


   
  
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
     
     
     


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>


<style>
    .swal2-confirm{
        background-color:#bb9438 !important;
    }
</style>



<script>
 var p="";
 
 
 
 function pope() {
     
     
       
           
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
  allowOutsideClick: false
})

swalWithBootstrapButtons.fire({
  title: 'Have you created Sub Domain For the Franchise?',
  text: "Only Press Yes if you have already Created it!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes',
  cancelButtonText: 'No',
  reverseButtons: true
}).then((result) => {
    
    
  if (result.isConfirmed) {
      
   
    
    
    document.getElementById("clickme").click();
    
    
  } 
  
  else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
      
    

    
  }
})
      
     
     
  
}
 
 
 
 
 
 
 
 
 
 
 
   $("#companyc").on('change', function() {
	
	
	var co= $("#companyc").val();
	
	
	 $.ajax({
              type:'POST',
              url:'validateoffice.php',
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





