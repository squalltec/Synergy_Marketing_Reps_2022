 <?php
 session_start();
include('header_owner.php');

require('db_connection.php');



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
$company = $_SESSION['company'];
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














$sql ="INSERT INTO users (name, email,password,username,country,company,city,birthday,zoom, phone, designation, department, website, relevantinformation,image,role,CFU,CF,C,CCC,CC,COA,CA,VC,canDEL ) VALUES ('$name', '$email', '$password', '$username','$country','$company','$city','$birthday','$zoom','$phone','$designation','$department','$website','$relevantinformation','$image','$role','$CFU','$CF','$C','$CCC','$CC','$COA','$CA','$VC','$DEL')";

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
            Create User
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><?php echo $_SESSION['company'];?></a></li>
            <li class="active">Create User</li>
          </ol>
        </section>

       
	   	
          <div class="row">
		  
		    <!-- form start -->
                <form action="#" method="post">
				
				
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
               
              
				
				
				
				
                  <div class="box-body">
				  
				  
				  
				  
				  
				  
            
                    <div class="checkbox">
                      <label>
                 
<input type="radio" name="forr" value="sales" /> Sales

<input type="radio" name="forr" value="accounts" /> Accounts

                      </label>
                    </div>
					
					
					
					
					
					
					
					
					
					
  <div> Permissions
  
  
  <?php	
					
				
	$iad=	$_SESSION['user_id'];
	
	
	
	
$sqll ="SELECT * FROM users WHERE id=$iad";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
      
$UCF=$roww['CF'];


$CFUU=$roww['CFU'];
$CU=$roww['C'];
$CCCU=$roww['CCC'];
$CCU=$roww['CC'];
$COAU=$roww['COA'];
$CAU=$roww['CA'];
$VCU=$roww['VC'];
$DELL=$roww['canDEL'];
      
  }}
	  ?>
	  
	  
	 
  
  
  
  
                   <div class="form-group">
                   
                     <?php
                     if($CFUU=='1')
                     {
                     ?>
                     </br>
                     <label>Create Franchisee Users</label>
   
    <input name='CFU' type='checkbox'>
    <?php 
                         
                     }
    
                     if($UCF=='1')
                     {
                     ?>

 </br>
                     <label>Create Franchisee</label>
              

    <input name='CF' type='checkbox'>
    <?php
                     }
                     
                     if($CU=='1')
                     {
                     ?>
    
         </br>
                     <label>Contracts</label>

    
    <input name='C' type='checkbox'>
    
        <?php
        }
        
                     if($CCCU=='1')
                     {
                     ?>
 </br>
                     <label>Create Client Company</label>
 
    <input name='CCC' type='checkbox'>

<?php
}

                     if($CCU=='1')
                     {
                     ?>
 </br>
                     <label>Create Customer</label>
 
    <input name='CC' type='checkbox'>
    
    <?php
                     }
                     if($COAU=='1')
                     {
                     ?>
    
  </br>
                     <label>Create Company Appointments</label>
 
    
    <input name='COA' type='checkbox'>
    
    <?php
                     }
                     if($CAU=='1')
                     {
                     ?>
 

 </br>
                     <label>Create Client Appointments</label>

 
    
    <input name='CA' type='checkbox'>
    
    <?php
                     }
                     if($VCU=='1')
                     {
                     ?>
     </br>
                     <label>Video Chat</label>
    
    <input name='VC' type='checkbox'>
    
    <?php
                     }
   
                     if($DELL=='1')
                     {
                     ?>
                     
                    </br> 
                     
                     <label>Can Delete?</label>
    
    <input name='DEL' type='checkbox'>
    <?php
                     }
    ?>
    
      </div>
                  
                  
                  
                  
                  
  </div>
  
  
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					   <!-- text input -->
                    <div class="form-group">
                      <label>Name</label>
                      <input required  type="text" name="name" class="form-control" placeholder="Enter Name..."/>
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input required  type="text" name="username"class="form-control" placeholder="Enter Username..."/>
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
                      <label>Designation</label>
                      <input required  name="designation" type="text" class="form-control" placeholder="Enter Designation..."/>
                    </div>
					
					
					<div class="form-group">
                      <label>City</label>
                      <input required  name="city"type="text" class="form-control" placeholder="Enter City..."/>
                    </div>
					
					
					
					<div class="form-group">
                      <label>Department</label>
                      <input required  name="department" type="text" class="form-control" placeholder="Enter Department..."/>
                    </div>
					
					
					<div class="form-group">
                      <label>Birthday</label>
                      <input required  name="birthday"type="date" class="form-control"/>
                    </div>
					
					<div class="form-group">
                      <label>Website</label>
                      <input required  name="website"type="text" class="form-control" placeholder="Enter Website..."/>
                    </div>
					
					<div class="form-group">
                      <label>Zoom ID</label>
                      <input required  name="zoom" type="text" class="form-control" placeholder="Enter Zoom Id..."/>
                    </div>
					
					
					
					
					
					
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Relevant Information</label>
                      <textarea name="relevantinformation" class="form-control" rows="3" placeholder="Enter Relevant Information..."></textarea>
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
                      <input required  name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input required  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
			
			
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     