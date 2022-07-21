 <?php
 session_start();
include('header_owner.php');

require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}



if (isset($_POST['submit'])) {
	

		
$user = $_POST['user'];
$companyname = $_SESSION['company'];
$appointment =$_POST['name'];

$date = $_POST['date'];
$time =$_POST['time'];


		
$sql ="INSERT INTO appointments (appointment, company, date, time,user) VALUES ('$appointment', '$companyname', '$date', '$time', '$user')";

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
            Create Appointment
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Appointments</a></li>
            <li class="active">Create Appointment</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		
          <div class="row">
		  
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
                      <input required  type="text" name="name" class="form-control" placeholder="Enter Appointment Subject..."/>
                    </div>
                 		





			
<?php	
		
		$cmp=$_SESSION['company'];
		
$sql ="SELECT * FROM users WHERE company='$cmp'";
		$result = $conn->query($sql);

 
 
 ?>
 <select id="state" name="user">
 		<option>----Select User----</option>
		<?php
	
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
	  
	  
  ?> <option><?php echo $row["name"];?></option>
   <?php
   
   
  }
 
$conn->close();
		
	
 
}	
		
?>	

</select>






























						
				
				
					
					<div class="form-group">
                      <label>Date</label>
                      <input required  name="date"type="date" class="form-control"/>
                    </div>
					
					<div class="form-group">
                      <label>Time</label>
                      <input required  name="time"type="time" class="form-control"/>
                    </div>
					
				
					
				
			
                  <div class="box-footer">
                    <input required  style="float:right;"type="submit" name="submit" value="Submit"class="btn btn-primary">
                  </div>
				  
				  
				  
					
					
					
					
                  </div><!-- /.box-body -->












              </div><!-- /.box -->



         
            </div><!--/.col (left) -->
			
			
		
			
			
			
			
				  
				  
                </form>
			
			
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     