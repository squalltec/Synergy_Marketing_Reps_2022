 <?php
 session_start();
include('header.php');


$dan = $_GET[dan];









require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}

if (isset($_POST['submit'])) {
	

$email =$_POST['companyemail'];
$name = $_POST['companyname'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$city = $_POST['city'];
$owner =  $_POST['owner'];
$website =$_POST['website'];
$address = $_POST['address'];


$sql ="UPDATE office SET companyname='$name',companyemail='$email',phone='$phone',country='$country',owner='$owner',city='$city',website='$website',address='$address' WHERE id='$dan'";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "Record Updated Successfully";
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
            Edit Company
            
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
				  
				  	
		
$sqll ="SELECT * FROM office WHERE id='$dan'";
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
				  
			
				  
				  
				  
			

		
				  
			
					
					   <!-- text input -->
                    <div class="form-group">
                      <label>Company Name</label>
                      <input required  type="text" value="<?php echo $roww['companyname'];?>" name="companyname" class="form-control" placeholder="Enter Company Name..."/>
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
                      <label>Address</label>
                      
                   
                      
                      
                      <input required  type="text" value="<?php echo $roww['address'];?>" name="address"class="form-control" placeholder="Enter Address..."/>
                    </div>
					
					
					
					
					

					<div class="form-group">
                      <label>Country</label>
                      
                      <input style='display:none;' value='<?php echo $roww['country'];?>' name='country'>
                      <?php	
                      $dan=$roww['country'];
                      
		
$sqlla ="SELECT * FROM countries WHERE id='$dan'";
		$resultta = $conn->query($sqlla);

 
 
	
	
if ($resultta->num_rows > 0) {
  // output data of each row
  while($rowwa = $resultta->fetch_assoc()) {
				
				
	$cntry=	$rowwa['name'];		
				  
				 
  }
  
  
    
} 
                    ?>  
                      
                      
                      
                      
                      <input required  type="text" value="<?php echo $cntry;?>" name="cont" class="form-control" placeholder="Enter Country..."/>
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
                      <label>Owner</label>
                      <input required  name="owner" type="text" value="<?php echo $roww['owner'];?>" class="form-control" placeholder="Enter Department..."/>
                    </div>
					
				
					
				 
				 
				 
				         <div class="form-group">
                      <label for="exampleInputEmail1">Company Email</label>
                      <input required  name="companyemail" type="email" value="<?php echo $roww['companyemail'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
                
               
					<div class="form-group">
                      <label>Website</label>
                      <input required  name="website"type="text" value="<?php echo $roww['website'];?>" class="form-control" placeholder="Enter Website..."/>
                    </div>
					
					
					
				  
					
				
					<div class="form-group">
                      <label>City</label>
                      <input required  name="city"type="text" value="<?php echo $roww['city'];?>" class="form-control" placeholder="Enter City..."/>
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
          
          
            <a href="del.php?iduser=<?php echo $roww['id'];?>&tbuser=office"> <button style="background-color:red; float:left;" name="Delete" class="btn btn-primary"> Delete </button></a> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
        <?php
  }
 

		
	
 
}	


?>
     