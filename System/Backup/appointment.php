<?php 

session_start();
require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}



if (isset($_POST['submit'])) {
	

		
$user = $_POST['user'];
$companyname = $_POST['company'];
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




<form action="#" method="post">



<input type="text" name="name" value="" placeholder="Appointment Name" required>

 	
			
<?php	
		
		
		
$sql ="SELECT * FROM office";
		$result = $conn->query($sql);

 
 
 ?>
 <select id="first" name="company">
 		<option>SELECT</option>
		<?php
	
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
	  
	  
  ?> <option><?php echo $row["companyname"];?></option>
   <?php
   
   
  }
 
$conn->close();
		
	
 
}	
		
?>	

</select>





<select name="user" id="state">
    
   </select>
   
   









<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>


jQuery(document).ready(function($) {
    $("#first").on('change', function() {
		
	
		
	
	
		var	compy = $("#first").val();
	
	
	
	  $.ajax({
              type:'POST',
              url:'backend.php',
              data:{'compy':compy},
              success:function(result){
                  $('#state').html(result);
                 
              }
          }); 
	
	
	
	
	
	
	
	
	
	
	
	
	
		
})})


</script>

















<input type="date" name="date" required>


<input type="time" name="time" required>
 
 <input type="submit" name="submit" value="Submit">
 
