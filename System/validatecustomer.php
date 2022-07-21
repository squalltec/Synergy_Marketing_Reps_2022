<?php

include("db_connection.php");

$comp1=$_POST['co'];
$comp2=$_POST['na'];
$comp3=$_POST['des'];
$comp4=$_POST['dep'];
		
$sqllas = "SELECT * FROM customer WHERE company='$comp1' && name='$comp2' && designation='$comp3' && department='$comp4'  && DEL='0'";
 
 
 $result=$conn->query($sqllas);
 
 
while($row=mysqli_fetch_assoc($result)){
    
     echo "exist";
}


?>