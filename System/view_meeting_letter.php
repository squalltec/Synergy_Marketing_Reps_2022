 
	 <?php
session_start();
include('header.php');
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



		
$sqll ="SELECT * FROM meetingletter WHERE DEL='0'";
		$resultt = $conn->query($sqll);
?>








 
   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Create Meeting
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Create Meeting</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		
          <div class="row">
		  		 
		  </br>	 
		  </br>	 
		  </br>	
		  	
		  	
 <table>
     
     <tr>
         <th>Client Name</th>
         <th>Location</th>
         <th>Date</th>
         <th>Time</th>
         <th>Venue</th>
         <th>Status</th>
         <th>Preffered Date</th>
          <th>Preffered Time</th>
           <th>Preffered Location</th>
           <th>Accept / Reject</th>
           <th>Change Preffered Location/Time/Date</th>
         
         </tr>

<?php
 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
      $ps=$roww['status'];
      ?>
      <form action='#' method='POST'>
      <tr>
          <td><?php echo $roww['cn']; ?></td>
             <td><?php echo $roww['location']; ?></td>
           <td><?php echo $roww['date']; ?></td>
            <td><?php echo $roww['time']; ?></td>
             <td><?php echo $roww['venue']; ?></td>
             <td><?php echo $roww['status']; ?></td>
             <td><?php echo $roww['preffereddate']; ?></td>
             <td><?php echo $roww['prefferedtime']; ?></td>
             <td><?php echo $roww['prefferedlocation']; ?></td>
              <td><?php echo $roww['prefferedlocation']; ?></td>
              <td>
                    
                    
                    
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
              
              <td><a href='change_meeting_letter.php?aid=<?php echo $roww['id'];?>'><input type='button'value='Change'></a></td>
              
              
      </tr>
      </form>
   
      
      
      
      
  <?php    
      
  }
}
	 
?>

</table> 

		  	

		  		 
		  		 
		  		 
		  		 
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      
      
      























