

 <?php

 include('header_owner.php');
require_once "db_connection.php";







$uid=$_SESSION['user_id'];

if (isset($_POST['submit'])) {
    
    
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$relevantinformation = $_POST['relevantinformation'];
$interests = $_POST['interests'];
$likesdislikes = $_POST['likesdislikes'];
$password = $_POST['password'];

    

if($_FILES['myfile']['name']==""){
    
        

$sql ="UPDATE users SET name='$name',password='$password',email='$email',phone='$phone',birthday='$birthday',relevantinformation='$relevantinformation',interests='$interests',likesdislikes='$likesdislikes' WHERE id='$uid'";

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
            
            
            

$sql ="UPDATE users SET name='$name',password='$password',img='$filename' WHERE id='$uid'";

 $result = $conn->query($sql);


if ($result === TRUE) {
 
} else {
 
}



}


}
    
    
    
    
    
    
    
    
    
    
    
    
	


}





?>



<?php

if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}


?>

   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            
           
          <h1>
            Edit Profile
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Profile</a></li>
            <li class="active">Edit Profile</li>
          </ol>
        </section>





<div style="padding-left:10%; padding-right:10%;">
        <!-- Main content -->
     

		  	  
		  
                                
               	
										 <?php
				  
				  	
		
$sqll ="SELECT * FROM users WHERE id='$uid'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
				  
				  
				  
				  
				  ?>
               
               
               
               
               
               <form action="#" method="post" enctype="multipart/form-data">
										
									
									<style>
									    .column {
  float: left;
  width: 40%;
  margin-left:10px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
									</style>
									
									
									
									
									
								
								<h1 align='center' > <img src="Fuser Images/<?php echo $roww['image'];?>" id="dp" class='ok' alt="" style="width:10%"></h1>
			
	<label align='center'>Change Image</label>	
					<input align='center'  accept="image/*" name="myfile" type="file" id="files" />

<br/>

<script>
document.getElementById('files').onchange = function () {
  var src = URL.createObjectURL(this.files[0])
  document.getElementById('dp').src = src
}

</script>
						
										<div class='row'>
										    
										      <div class='column'>									
														
														
														
														  
				  
				  <style>
				      .ok{
				        
				      }
				  </style>
				  
           
			
			
							
									
									
														<label class="text-label form-label">Name</label>
														
														
														  <input required  type="text" value="<?php echo $roww['name'];?>" name="name" class="form-control" placeholder="Enter Name..."/>
												
												  
												  	<label class="text-label form-label">Email</label>
												  	  <input required  type="text" value="<?php echo $roww['email'];?>" name="email" class="form-control" placeholder="Enter Email..."/>
												  	  
												 
														<label class="text-label form-label">Password</label>
														
														
														  <input required  type="text" value="<?php echo $roww['password'];?>" name="password" class="form-control" placeholder="Enter Password..."/>
														  
														  
														  	<label class="text-label form-label">Phone</label>
														    <input required  type="text" value="<?php echo $roww['phone'];?>"  name="phone" class="form-control"  placeholder="Enter Phone..."/>
														  
														  	<label class="text-label form-label">Country</label>
														   <input required  type="text" value="<?php echo $roww['country'];?>" disabled name="country" class="form-control" placeholder="Enter Country..."/>
												  	  
														  	<label class="text-label form-label">City</label>
														    <input required  type="text" value="<?php echo $roww['city'];?>" disabled name="city" class="form-control" placeholder="Enter City..."/>
														     	 	<label class="text-label form-label">Birthday</label> 
														    <input required  type="date" value="<?php echo $roww['birthday'];?>"  name="birthday" class="form-control" />
														  
													
														  </div>
														  
														  
														  
														  
														  
														  
														  
														  
														  
														  <div class='column'>
														   
														  	<label class="text-label form-label">Company</label>
														    <input required  type="text" value="<?php echo $roww['company'];?>" disabled name="company" class="form-control" disabled placeholder="Enter Company..."/>
														  	<label class="text-label form-label">Designation</label>  
														     <input required  type="text" value="<?php echo $roww['designation'];?>" disabled name="designation" class="form-control" placeholder="Enter Designation..."/>
														     	<label class="text-label form-label">Department</label>
														      <input required  type="text" value="<?php echo $roww['department'];?>" disabled name="department" class="form-control" placeholder="Enter Department..."/>
														      
														      
														      	<label class="text-label form-label">Relevant Information</label>
														      <input   type="text" value="<?php echo $roww['relevantinformation'];?>"  name="relevantinformation" class="form-control" placeholder="Enter relevantinformation..."/>
														   	<label class="text-label form-label">Interests</label>   
														      <input   type="text" value="<?php echo $roww['interests'];?>"  name="interests" class="form-control" placeholder="Enter interests..."/>
														     	<label class="text-label form-label">Likes & Dislikes</label> 
														      <input   type="text" value="<?php echo $roww['likesdislikes'];?>"  name="likesdislikes" class="form-control" placeholder="Enter likes & dislikes..."/>
														      
														      
														</div>      
														      
													</div>	      
														      
														      
														      
														      
											
												<br/>
                                            
													<button style='background-color:#ffd700; float:right;' type='submit' name='submit' class="btn btn-primary btn-sm" >Update</button>
									
											<br/>	<br/>	<br/>	<br/>
										
										</form>
										
										<?php
										
  }
}
										
										?>
               
               
               
                       
                   
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
	
		  
		  
		  
		  
		  
			
			
         
        
     
        
        
        
      </div><!-- /.content-wrapper -->
     





















