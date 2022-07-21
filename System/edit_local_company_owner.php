 <?php
 session_start();
include('header_owner.php');


$dan = $_GET[dan];



require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}

if (isset($_POST['submit'])) {
	


$name = $_POST['companyname'];
$phone = $_POST['phone'];

$establishedyear=$_POST['establishedyear'];

$website =$_POST['website'];
$address = $_POST['location'];


$sql ="UPDATE local_company SET companyname='$name',phone='$phone',website='$website',location='$address',establishedyear='$establishedyear' WHERE id='$dan'";

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
				  
				  	
		
$sqll ="SELECT * FROM local_company WHERE id='$dan'";
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
                   
                      <!-- text input -->
                    <div class="form-group">
                      <label>Established Year</label>
                      <input required  type="number" value="<?php echo $roww['establishedyear'];?>" name="establishedyear" class="form-control"/>
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
				  
			
					

				
					
					
					
				

                 
					
					
					
					
                  </div><!-- /.box-body -->












              </div><!-- /.box -->



         
            </div><!--/.col (left) -->
			
			
			
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
              
                <div class="box-body">
				
				
				
				
                 
				 
				 
				 
				         <div class="form-group">
                      <label for="exampleInputEmail1">Website</label>
                      <input required  name="website" type="text" value="<?php echo $roww['website'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Website">
                    </div>
            
				  
				  	  <div class="form-group">
                      <label>Location</label>
                      <input required  type="text" value="<?php echo $roww['location'];?>" name="location"class="form-control" placeholder="Enter Country..."/>
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
          
                 <?php
          $canu=$_SESSION['canDELL'];
            if($canu=='1')
            {
?>
    
           <a href="del.php?iduser=<?php echo $roww['id'];?>&tbuser=local_company"><label style="background-color:red; float:left;" name="Delete" class="btn btn-primary"> Delete </label></a> 
    
    			
   <?php
            }
  }
 

		
	
 
}	


?>
    
    
     <br/> <br/> <br/> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     