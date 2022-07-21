 <?php
 session_start();
include('header.php');


$dan = $_GET[dan];

require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}




require_once "db_connection.php";


if (isset($_POST['submit'])) {
	

$email =$_POST['email'];
$password =$_POST['password'];
$name = $_POST['name'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$designation =$_POST['designation'];
$city = $_POST['city'];
$department =  $_POST['department'];
$birthday =$_POST['birthday'];
$website =$_POST['website'];
$zoom = $_POST['zoom'];
$relevantinformation = $_POST['relevantinformation'];
$interests = $_POST['interests'];
$likesdislikes = $_POST['likesdislikes'];



if($_FILES['myfile']['name']==""){
	
	
	
$sql ="UPDATE customer SET name='$name',email='$email',password='$password',username='$username',phone='$phone',country='$country',designation='$designation',city='$city',department='$department',birthday='$birthday',website='$website',zoom='$zoom',relevantinformation='$relevantinformation',interests='$interests',likesdislikes='$likesdislikes' WHERE id='$dan'";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


else{

		$filename = $_FILES['myfile']['name'];
	  $destination = 'Customer Images/'. $filename;
	  $extension = pathinfo($filename, PATHINFO_EXTENSION);
	  $file = $_FILES['myfile']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {






$sql ="UPDATE customer SET name='$name',email='$email',password='$password',username='$username',phone='$phone',country='$country',designation='$designation',city='$city',department='$department',birthday='$birthday',website='$website',zoom='$zoom',relevantinformation='$relevantinformation',interests='$interests',likesdislikes='$likesdislikes',image='$filename' WHERE id='$dan'";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




		}






}


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
           
            <li class="active">Edit Profile</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		
          <div class="row">
		  		  <?php
				  
				  	
		
$sqll ="SELECT * FROM customer WHERE id='$dan'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
				  
				  
				  
				  
				  ?>
		    <!-- form start -->
                <form action="#" method="post" enctype="multipart/form-data">
				
				
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
               
              
				
				
				
				
                  <div class="box-body">
				  
			
				  			  
				  
				  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				  
				  
            <img src="Customer Images/<?php echo $roww['image'];?>" id="dp" class="" alt="" style="width:50px; height:50px;">
			</br>
			</br>

					
					<input accept="image/*" class="hidden" name="myfile" type="file" id="files" />

                       
                        <button for="files">Upload New Image</button>

<br/>
<script>
document.getElementById('files').onchange = function () {
  var src = URL.createObjectURL(this.files[0])
  document.getElementById('dp').src = src
}

</script>
			
		
         
					
					
					   <!-- text input -->
                    <div class="form-group">
                      <label>Name</label>
                      <input required  type="text" value="<?php echo $roww['name'];?>" name="name" class="form-control" placeholder="Enter Name..."/>
                    </div>
                    <div style='display:none;' class="form-group">
                      <label>Username</label>
                      <input  type="text" value="<?php echo $roww['username'];?>" name="username"class="form-control" placeholder="Enter Username..."/>
                    </div>
					
					   <!-- phone mask -->
                  <div class="form-group">
                    <label>Phone:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input required value="<?php echo $roww['phone'];?>" type="text" name="phone"class="form-control"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

					<div class="form-group">
                      <label>Country</label>
                      <input required  type="text" value="<?php echo $roww['country'];?>" name="country"class="form-control" placeholder="Enter Country..."/>
                    </div>
					
					
					
		
					
					
					<div class="form-group">
                      <label>Designation</label>
                      <input required  name="designation" type="text" value="<?php echo $roww['designation'];?>" class="form-control" placeholder="Enter Designation..."/>
                    </div>
					
					
					<div class="form-group">
                      <label>City</label>
                      <input required  name="city"type="text" value="<?php echo $roww['city'];?>" class="form-control" placeholder="Enter City..."/>
                    </div>
					
					
					
					<div class="form-group">
                      <label>Department</label>
                      <input required  name="department" type="text" value="<?php echo $roww['department'];?>" class="form-control" placeholder="Enter Department..."/>
                    </div>
					
					
				
					
					<div style='display:none;' class="form-group">
                      <label>Zoom ID</label>
                      <input  name="zoom" type="text" class="form-control"value="<?php echo $roww['zoom'];?>" placeholder="Enter Zoom Id..."/>
                    </div>
			
					
					
				

                 
					
					
					
					
                  </div><!-- /.box-body -->












              </div><!-- /.box -->



         
            </div><!--/.col (left) -->
			
			
			
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
              
                <div class="box-body">
				
				
				
				
                 
				 
				 
				 
				         <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input required  name="email" type="email" value="<?php echo $roww['email'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
                    
                    	<div class="form-group">
                      <label>Birthday</label>
                      <input required  name="birthday"type="date" value="<?php echo $roww['birthday'];?>" class="form-control"/>
                    </div>
					
					<div class="form-group">
                      <label>Website</label>
                      <input required  name="website"type="text" value="<?php echo $roww['website'];?>" class="form-control" placeholder="Enter Website..."/>
                    </div>
                    
                    
                    <div style='display:none;' class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input  name="password" type="password" value="<?php echo $roww['password'];?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                  
					<div class="form-group">
                      <label>Relevant Information</label>
                      <textarea required  name="relevantinformation" class="form-control" placeholder="Enter Relevant Information..."><?php echo $roww['relevantinformation'];?></textarea>
                    </div>
					
					<div class="form-group">
                      <label>Interests</label>
                      <textarea required  name="interests" class="form-control" placeholder="Enter Interests..."><?php echo $roww['interests'];?></textarea>
                    </div>
					
					<div class="form-group">
                      <label>Likes and Dislikes</label>
                      <textarea required  name="likesdislikes" class="form-control" placeholder="Enter Likes Dislikes..."><?php echo $roww['likesdislikes'];?></textarea>
                    </div>











<!--				  <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input required  type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
				 
				 -->
				 
				 
				 
                 
				 
				 
				 
              
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
			
			
			
			
			
			
			
			
			
			
                  <div class="box-footer">
                    <input style="background-color:gold; float:right;" type="submit" name="submit" value="Submit"class="btn btn-primary">
                     
                  </div>
				  
				  
				  
				  
				  
                </form>
			
			
		
      </div>   <!-- /.row -->
          	 
        <a href="del.php?iduser=<?php echo $roww['id'];?>&tbuser=customer"> <button style="background-color:red; float:left;" name="Delete" class="btn btn-primary"> Delete </button></a> 
    			
   <?php
  }
 

		
	
 
}	


?>
    
    
    
    
     <br/> <br/> <br/> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
     