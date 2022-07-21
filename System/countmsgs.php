                 
                        
<?php
session_start();
include 'db_connection.php';

$aidi=$_SESSION['user_id'];
$cntr=0;
$sqllf ="SELECT * FROM chat WHERE rid='$aidi' && seen='0'";
		$resulttf = $conn->query($sqllf);

 
 
	
	
if ($resulttf->num_rows > 0) {
  // output data of each row
  while($rowwf = $resulttf->fetch_assoc()) {
	 $cntr=$cntr+1;
	 
  }
}
if($cntr!='0'){
echo $cntr;}
                    ?>