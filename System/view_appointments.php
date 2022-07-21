 <?php
session_start();
include('header.php');

require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}





?>

 
 
 

   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           View Appointments
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Appointments</a></li>
            <li class="active">View Appointments</li>
          </ol>
        </section>

       
	   	
        <style>.scrolll{overflow: scroll;}</style>
		  
 
     <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
            

              <div class="box">
               
                <div class="scrolll box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Appointment Name</th>
						<th>Company</th>
                        <th>With User</th>
                        <th>Date</th>
                        <th>Time</th>
						 <th>Edit</th>
						 <th>Delete</th>
						 <th>Form</th>
                        
                      </tr>
                    </thead>
                    <tbody>
					
				<?php	
					
				
		
$sqll ="SELECT * FROM appointments WHERE DEL='0'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
	  ?>
	  
					<tr>
                        <td><?php echo $roww["appointment"];?></td>
                        <td><?php echo $roww["company"];?></td>
						<td><?php echo $roww["user"];?></td>
                        <td><?php echo $roww["date"];?></td>
                        <td><?php echo $roww["time"];?></td>
						<td><a href="update_appointment.php?dan=<?php echo $roww['id'];?>">Edit</a></td>
						  <td><a href="del.php?iduser=<?php echo $roww['id'];?>&tbuser=appointments">Delete</a></td>
						<td><a href="open_form.php?dan=<?php echo $roww['appointment'];?>&dann=<?php echo $roww['clientname'];?>">Open Form</a></td>
                        
                      </tr>
	  
 
   <?php
  }
 

		
	
 
}	

else{
	?>
	
	<tr>
                        <td>No Data</td>
                        <td>No Data</td>
                        <td>No Data</td>
                        <td>No Data</td>
                        <td>No Data</td>
                      </tr>
					  
					  
					  <?php
	
	
}

?>
                      
                     
                     
                    </tbody>
                 
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  
			  
			  
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		
		
		
    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>