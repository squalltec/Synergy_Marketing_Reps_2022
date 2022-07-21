<?php

include("db_connection.php");

$comp1=$_POST['co'];
		
$sqllas = "SELECT * FROM local_company WHERE companyname='$comp1'  && DEL='0'";
 
 
 $result=$conn->query($sqllas);
 
 
while($row=mysqli_fetch_assoc($result)){
    
     echo "exist";
}


?>