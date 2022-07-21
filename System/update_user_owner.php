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
$birthday =$_POST['birthday'];
$website =$_POST['website'];


$CFU = isset($_POST['CFU']) ? "1" : "0";
$CF = isset($_POST['CF']) ? "1" : "0";

$C = isset($_POST['C']) ? "1" : "0";

$CCC = isset($_POST['CCC']) ? "1" : "0";

$CC = isset($_POST['CC']) ? "1" : "0";

$COA = isset($_POST['COA']) ? "1" : "0";

$CA = isset($_POST['CA']) ? "1" : "0";

$VC = isset($_POST['VC']) ? "1" : "0";

$DEL = isset($_POST['DEL']) ? "1" : "0";




$sql ="UPDATE users SET name='$name',email='$email',password='$password',phone='$phone',country='$country',city='$city',birthday='$birthday',website='$website',role='$role',CFU='$CFU',CF='$CF',CCC='$CCC',C='$C',CC='$CC',COA='$COA',CA='$CA',VC='$VC',canDEL='$DEL' WHERE id='$dan'";

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
				  
			
				  <label style='display:none;'>Role:</label>
			<select style='display:none;' name='role'>
			<option><?php echo $roww['role'];?></option>
			<option value="owner">Owner</option>
			<option value="partner">Partner</option>
			<option value="staff">Staff</option>
			
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
                      <input required value="<?php echo $roww['phone'];?>" type="text" name="phone"class="form-control"/>
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
                      <label>Birthday</label>
                      <input required  name="birthday"type="date" value="<?php echo $roww['birthday'];?>" class="form-control"/>
                    </div>
					
					<div class="form-group">
                      <label>Website</label>
                      <input required  name="website"type="text" value="<?php echo $roww['website'];?>" class="form-control" placeholder="Enter Website..."/>
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
                  
                  
                  
                  
                  
                   <div class="form-group">
                      <label>Permissions</label>
                     
                     </br>
                     <label>Create Franchisee Users</label>
                     <?php
                     		  	
		
if($roww['CFU']=='1')
{
    
    ?>
    
    <input name='CFU'type='checkbox' checked>
<?php
}
else
{
    ?>
    
    <input name='CFU' type='checkbox'>
    
    <?php
}
	
?>
 </br>
                     <label>Create Franchisee</label>
              
               <?php
                     		  	
		
if($roww['CF']=='1')
{
    
    ?>
    
    <input name='CF'type='checkbox' checked>
<?php
}
else
{
    ?>
    
    <input name='CF' type='checkbox'>
    
    <?php
}
	
?>       
         </br>
                     <label>Contracts</label>
         <?php
                     		  	
		
if($roww['C']=='1')
{
    
    ?>
    
    <input name='C'type='checkbox' checked>
<?php
}
else
{
    ?>
    
    <input name='C' type='checkbox'>
    
    <?php
}
	
?>             
 </br>
                     <label>Create Client Company</label>
 <?php
                     		  	
		
if($roww['CCC']=='1')
{
    
    ?>
    
    <input name='CCC'type='checkbox' checked>
<?php
}
else
{
    ?>
    
    <input name='CCC' type='checkbox'>
    
    <?php
}
	
?>

 </br>
                     <label>Create Customer</label>
 <?php
                     		  	
		
if($roww['CC']=='1')
{
    
    ?>
    
    <input name='CC'type='checkbox' checked>
<?php
}
else
{
    ?>
    
    <input name='CC' type='checkbox'>
    
    <?php
}
	
?>
 
  </br>
                     <label>Create Company Appointments</label>
  <?php
                     		  	
		
if($roww['COA']=='1')
{
    
    ?>
    
    <input name='COA'type='checkbox' checked>
<?php
}
else
{
    ?>
    
    <input name='COA' type='checkbox'>
    
    <?php
}
	
?>

 </br>
                     <label>Create Client Appointments</label>

 <?php
                     		  	
		
if($roww['CA']=='1')
{
    
    ?>
    
    <input name='CA'type='checkbox' checked>
<?php
}
else
{
    ?>
    
    <input name='CA' type='checkbox'>
    
    <?php
}
	
?>
           
       </br>
                     <label>Video Chat</label>
                     
            <?php
                     		  	
		
if($roww['VC']=='1')
{
    
    ?>
    
    <input name='VC'type='checkbox' checked>
<?php
}
else
{
    ?>
    
    <input name='VC' type='checkbox'>
    
    <?php
}
	
?>    


 </br>
                     <label>Can Delete?</label>
                     
            <?php
                     		  	
		
if($roww['canDEL']=='1')
{
    
    ?>
    
    <input name='DEL'type='checkbox' checked>
<?php
}
else
{
    ?>
    
    <input name='DEL' type='checkbox'>
    
    <?php
}
	
?> 





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
                  
                    <input required  style="background-color:gold; float:right;"type="submit" name="submit" value="Submit"class="btn btn-primary">
                  </div>
				  
				  
				  
				  
				  
                </form>
			
			
			

          </div>   <!-- /.row -->
            <a href="del.php?iduser=<?php echo $roww['id'];?>&tbuser=users"> <button style="background-color:red; float:left;" name="Delete" class="btn btn-primary"> Delete </button></a> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      			
   <?php
  }
 

		
	
 
}	


?>
      
      
     