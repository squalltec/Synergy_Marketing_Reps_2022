 <?php


session_start();

include('header.php');


$aid = $_GET[aid];



require_once "db_connection.php";




if(isset($_POST['submit'])){
    
    
    $pd=$_POST['pd'];
    $pt=$_POST['pt'];
    $pl=$_POST['pl'];
    
    
    
$sql ="UPDATE meetingletter SET preffereddate='$pd',prefferedtime='$pt',prefferedlocation='$pl' WHERE id='$aid'";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "Updated Successfully";
  header("Location: view_meeting_letter.php");
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



	

<?php
			  
				  	
		
$sqll ="SELECT * FROM meetingletter WHERE id='$aid'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
				  
				  
				  
?>
<form action='#' method='POST'>
    
<label>Preffered Date</label>
<input type='date' name='pd' value='<?php echo $roww['date'];?>'>

<label>Preffered Time</label>
<input type='time' name='pt' value='<?php echo $roww['time'];?>'>

<label>Preffered Location</label>
<input type='text' name='pl' value='<?php echo $roww['location'];?>'>

<input type='submit' value='submit' name='submit'>


</form>
<?php

}}
?>

		  		 
		  		 
		  		 
		  		 
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      
      
      







































