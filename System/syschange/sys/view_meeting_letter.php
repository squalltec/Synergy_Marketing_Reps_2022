
	 <?php

include('db_connection.php');




if(isset($_POST['accept'])){
    $ii=$_POST['id'];
    
    
    $sql ="UPDATE meetingletter SET status='Accepted' WHERE id='$ii'";

 $result = $conn->query($sql);


if ($result === TRUE) {

} else {
  
}


    
    
}

if(isset($_POST['reject'])){
     $ii=$_POST['id'];
     
     
         
    $sql ="UPDATE meetingletter SET status='Rejected' WHERE id='$ii'";

 $result = $conn->query($sql);


if ($result === TRUE) {
 
} else {
 
}

    
    
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'headmain.php';?>
<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!-- Daterange picker -->
    <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
	
    <!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
	<link href="../icon.css?family=Material+Icons" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
 <!--*******************
        Preloader start
    ********************-->
   <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
<?php  include 'header.php'; ?>
     <!--**********************************
            Nav header end
        ***********************************-->
    <!--**********************************
            Sidebar start
        ***********************************-->
    <?php  include 'sidebar.php'; ?>
    <!--**********************************
            Sidebar end
        ***********************************-->
    

    		
		<!--**********************************
            Content body start
        ***********************************-->
 <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<h3 align="center"> View Meetings List</h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-striped">
                                        <thead>
                                            <tr>
                                               
                                               
                                                   <th class=" ps-2" style="width: 20px;">Client Name</th>
         <th class=" ps-2" style="width: 20px;">Location</th>
         <th class=" ps-2" style="width: 20px;">Date</th>
         <th class=" ps-2" style="width: 20px;">Time</th>
         <th class=" ps-2" style="width: 20px;">Venue</th>
         <th class=" ps-2" style="width: 20px;">Status</th>
         <th class=" ps-2" style="width: 20px;">Preffered Date</th>
          <th class=" ps-2" style="width: 20px;">Preffered Time</th>
           <th class=" ps-2" style="width: 20px;">Preffered Location</th>
           <th class=" ps-2" style="width: 20px;">Accept / Reject</th>
           <th class=" ps-2" style="width: 20px;">Change Preference</th>
		   
                                            </tr>
                                        </thead>
                                        <tbody id="customers">
										<?php
 
 

		
$sqll ="SELECT * FROM meetingletter WHERE DEL='0'";
		$resultt = $conn->query($sqll);
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
      $ps=$roww['status'];
      ?>
      <form action='#' method='POST'>
                                            <tr class="btn-reveal-trigger">
                                               
                                                
                                               
                                               <td><?php echo $roww['cn']; ?></td>
             <td class="py-2" style="width: 20px;"><?php echo $roww['location']; ?></td>
           <td class="py-2" style="width: 20px;"><?php echo $roww['date']; ?></td>
            <td class="py-2" style="width: 20px;"><?php echo $roww['time']; ?></td>
             <td class="py-2" style="width: 20px;"><?php echo $roww['venue']; ?></td>
             <td class="py-2" style="width: 20px;"><?php echo $roww['status']; ?></td>
             <td class="py-2" style="width: 20px;"><?php echo $roww['preffereddate']; ?></td>
             <td class="py-2" style="width: 20px;"><?php echo $roww['prefferedtime']; ?></td>
             <td class="py-2" style="width: 20px;"><?php echo $roww['prefferedlocation']; ?></td>
              <td class="py-2" style="width: 20px;"><?php echo $roww['prefferedlocation']; ?></td>
											   
										
<td class="py-2" style="width: 20px;">
                    
                    
                    
                    <input style='display:none;'type='text' name='id' value='<?php echo $roww['id'];?>'/>
                <?php  
                  if($ps=='Accepted'){
                    ?>
                    
                    <input type='submit' name='reject' value='Reject'/>
                    
                    <?php
                  }
                
                  else if($ps=='Rejected'){
                    ?>
                    
                    <input type='submit' name='accept' value='Accept'/>
                    
                    <?php
                  }
                
                  
                  else {
                    ?>
                     <input type='submit' name='accept' value='Accept'/>
                     <input type='submit' name='reject' value='Reject'/>
                  
                    
                    <?php
                  }
                 ?> 
              </td>
              
              									
											   
											   
											   <td class="py-2" style="width: 20px;">
                                                    <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-bs-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item" href="change_meeting_letter.php?aid=<?php echo $roww['id'];?>">Edit</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr> 

</form>
  <?php
  }
}?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
     <!--**********************************
            Content body end
        ***********************************-->



    	
        <!--**********************************
            Footer start
        ***********************************-->
       <?php  include 'footer.php'; ?>
        <!--**********************************
            Footer end
        ***********************************-->
    
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
 


    <!-- Daterangepicker -->
    <!-- momment js is must -->
    
    <!-- clockpicker -->
    <script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>

	

    
	
</body>
</html>
<?php


 ?>