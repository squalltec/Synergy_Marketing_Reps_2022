

 <?php


require_once "db_connection.php";





if (isset($_POST['submit'])) {
    
    
$name = $_POST['name'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$designation = $_POST['designation'];


$password = $_POST['password'];

    

if($_FILES['myfile']['name']==""){
    
        

$sql ="UPDATE users SET name='$name',password='$password',email='$email',phone='$phone',designation='$designation' WHERE id='21'";

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



<?php include('header.php');

if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}


?>

   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            
            <br/><br/><br/><br/>
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
				  
				  	
		
$sqll ="SELECT * FROM users WHERE id='21'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
				  
				  
				  
				  
				  ?>
               
               
               
               
               
               <form action="#" method="post" enctype="multipart/form-data">
									
					<style>
					    .column {
  float: left;
  width:40%;
  margin-left:10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
					</style>			
														
														
														
														
														  
				  
				  <style>
				      .ok{
				        
				      }
				  </style>
				  
           <h1 align='center' > <img src="admin/<?php echo $roww['img'];?>" id="dp" class='ok' alt="" style=" border-radius:50px 50px; width:10%"></h1>
			
				<label>Change Image</label>	
					<input  accept="image/*" name="myfile" type="file" id="files" />



<script>
document.getElementById('files').onchange = function () {
  var src = URL.createObjectURL(this.files[0])
  document.getElementById('dp').src = src
}

</script>

<div class='row'><div class='column'>
			
					
														<label class="text-label form-label">Name</label>
														
														
														  <input required  type="text" value="<?php echo $roww['name'];?>" name="name" class="form-control" placeholder="Enter Name..."/>
												
												  
												  
												  
												  	<label class="text-label form-label">Email</label>
														
														
														  <input required  type="text" value="<?php echo $roww['email'];?>" name="email" class="form-control" placeholder="Enter Email..."/>
												
												  
												  	<label class="text-label form-label">Password</label>
														
														
														  <input required  type="text" value="<?php echo $roww['password'];?>" name="password" class="form-control" placeholder="Enter Password..."/>
														  
														  
														  </div>
														  
														  <div class='column'>
												  
												  	<label class="text-label form-label">Phone</label>
														
														
														  <input required  type="text" value="<?php echo $roww['phone'];?>" name="phone" class="form-control" placeholder="Enter Phone..."/>
												  
												  
												  	<label class="text-label form-label">Designation</label>
														
														
														  <input required  type="text" value="<?php echo $roww['designation'];?>" name="designation" class="form-control" placeholder="Enter Designation..."/>
												  
												  
												 </div></div>
													
											
												<br/>
                                            
													<button style='background-color:#ffd700; float:right;' type='submit' name='submit' class="btn btn-primary btn-sm" >Update</button>
									
										<br/><br/><br/><br/>
										
										</form>
										
										<?php
										
  }
}
										
										?>
               
               
               
                       
                   
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
	
		  
		  
		  
		  
		  
			
			
         
        
     
        
        
        
      </div><!-- /.content-wrapper -->
     





















