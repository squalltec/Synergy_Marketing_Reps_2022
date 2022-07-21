<?php

include("db_connection.php");

$comp1=$_POST['compy1'];
		
$sqllas = "SELECT * FROM cities WHERE country_id='$comp1'";
 
 
 
 
 $result=$conn->query($sqllas);
 $data = array();


echo "<option>Select City</option><br>";
while($row=mysqli_fetch_assoc($result)){
    
     echo "<option>".$row['name']."</option><br>";
}


echo json_encode("<option>Select City</option><br>"+$data);
?>