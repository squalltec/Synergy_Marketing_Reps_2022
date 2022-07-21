 <?php
 session_start();
include('header_owner.php');


$dan = $_GET[dan];









require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}

if (isset($_POST['submit'])) {
	

$role =$_POST['role'];
$email =$_POST['email'];
$password =$_POST['password'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$city = $_POST['city'];
$department =  $_POST['department'];
$birthday =$_POST['birthday'];
$zoom = $_POST['zoom'];


$sql ="UPDATE users SET name='$name',email='$email',password='$password',phone='$phone',country='$country',city='$city',department='$department',birthday='$birthday',zoom='$zoom',role='$role' WHERE id='$dan'";

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
				  
				  	
		
$sqll ="SELECT * FROM users WHERE id='$dan'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
				  
				  
				  
				  
				  ?>
		    <!-- form start -->
                <form action="#" method="post">
				
				
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
               
              
				
				
				
				
                  <div class="box-body">
				  
			
				  
			<select name='role'>
			<option><?php echo $roww['role'];?></option>
		
			<option value="sales">Sales</option>
			
			<option value="accounts">Accounts</option>
			
			</select>
			  
         
		 </br>
		 </br>
					
         
					
					
					   <!-- text input -->
                    <div class="form-group">
                      <label>Name</label>
                      <input required  type="text" value="<?php echo $roww['name'];?>" name="name" class="form-control" placeholder="Enter Name..."/>
                    </div>
                   
					
					   <!-- phone mask -->
                  <div class="form-group">
                    <label>Phone:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input required value="<?php echo $roww['phone'];?>" type="number" name="phone"class="form-control"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

					<div class="form-group">
                      <label>Country</label>
                      <input required  type="text" value="<?php echo $roww['country'];?>" name="country"class="form-control" placeholder="Enter Country..."/>
                    </div>
					
					
					
		
					
					
					
					<div class="form-group">
                      <label>City</label>
                      <input required  name="city"type="text" value="<?php echo $roww['city'];?>" class="form-control" placeholder="Enter City..."/>
                    </div>
					
					
					
					<div class="form-group">
                      <label>Department</label>
                      <input required  name="department" type="text" value="<?php echo $roww['department'];?>" class="form-control" placeholder="Enter Department..."/>
                    </div>
					
					
					<div class="form-group">
                      <label>Birthday</label>
                      <input required  name="birthday"type="date" value="<?php echo $roww['birthday'];?>" class="form-control"/>
                    </div>
					
					
					
					<div class="form-group">
                      <label>Zoom ID</label>
                      <input required  name="zoom" type="text" class="form-control"value="<?php echo $roww['zoom'];?>" placeholder="Enter Zoom Id..."/>
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
                      <label for="exampleInputPassword1">Password</label>
                      <input required  name="password" type="password" value="<?php echo $roww['password'];?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                    <input required  style="float:right;"type="submit" name="submit" value="Submit"class="btn btn-primary">
                  </div>
				  
				  
				  
				  
				  
                </form>
			
			
			
			
   <?php
  }
 

		
	
 
}	


?>
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     