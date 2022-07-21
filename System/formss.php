 <?php
 session_start();
include('header.php');

   $conn=mysqli_connect('localhost','root','','tsynergies');
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }




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


$sql ="INSERT INTO users (name, email,password,username,country,company,city,birthday,zoom, phone, designation, department, website, relevantinformation,image,role ) VALUES ('$name', '$email', '$password', '$username','$country','$company','$city','$birthday','$zoom','$phone','$designation','$department','$website','$relevantinformation','$image','$role')";

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
            Create User Under Registered Company
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">TS- Registered Company</a></li>
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
                      <label>Company: </label>		
  <select name="company">
                    <option value=''>-----SELECT Company-----</option>
            <?php 
                
                $resultt=mysqli_query($conn,'SELECT id,companyname FROM office'); 
                while($row=mysqli_fetch_assoc($resultt)) { 
                    echo "<option value='$row[companyname]'>$row[companyname]</option>"; 
                } 
            ?> 
                </select> 
 
 
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
     