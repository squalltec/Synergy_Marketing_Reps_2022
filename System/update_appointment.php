 <?php
 session_start();
include('header.php');


$dan = $_GET[dan];









require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}

if (isset($_POST['submit'])) {
	

$appointmentname =$_POST['appointmentname'];

$company =$_POST['company'];

$withuser =$_POST['withuser'];

$date =$_POST['date'];

$time =$_POST['time'];


$sql ="UPDATE appointments SET appointment='$appointmentname',company='$company',user='$withuser',date='$date',time='$time' WHERE id='$dan'";

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
            Edit Appointment
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Edit Appointment</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		
          <div class="row">
		  		  <?php
				  
				  	
		
$sqll ="SELECT * FROM appointments WHERE id='$dan'";
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
                      <label>Appointment Name</label>
                      <input required  type="text" value="<?php echo $roww['appointment'];?>" name="appointmentname" class="form-control" placeholder="Enter Appointment Name..."/>
                    </div>
                   
					
				  
				  <div class="form-group">
                      <label>Company</label>
                      <input required  type="text" value="<?php echo $roww['company'];?>" name="company"class="form-control" placeholder="Enter Company..."/>
                    </div>
					

					<div class="form-group">
                      <label>User</label>
                      <input required  type="text" value="<?php echo $roww['user'];?>" name="withuser"class="form-control" placeholder="Enter Country..."/>
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
                      <label>Date</label>
                      <input required  name="date"type="date" value="<?php echo $roww['date'];?>" class="form-control"/>
                    </div>
					<div class="form-group">
                      <label>Time</label>
                      <input required  name="time"type="time" value="<?php echo $roww['time'];?>" class="form-control"/>
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
     