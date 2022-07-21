<?php

include("db_connection.php");

$comp1=$_POST['co'];
$comp2=$_POST['na'];
$comp22=$_POST['na2'];
$comp3=$_POST['forr'];
$comp4=$_POST['con'];
	
	
		
$sqllas = "SELECT * FROM users WHERE company='$comp1' && name='$comp2' && lastname='$comp22' && designation='$comp3' && country='$comp4'  && DEL='0'";
 
 
 $result=$conn->query($sqllas);
 
 
while($row=mysqli_fetch_assoc($result)){
    
     echo "exist";
}


?>