<?php

include("db_connection.php");

$comp1=$_POST['compy1'];
		
$sqllas = "SELECT * FROM office WHERE companyname='$comp1'";
 
 
 
 
 $result=$conn->query($sqllas);
 $data = array();



while($row=mysqli_fetch_assoc($result)){
    
    
    $aacomp=$row['country'];
    		
$sqllass = "SELECT * FROM countries WHERE id='$aacomp'";
    
    
 $resultt=$conn->query($sqllass);
 
while($rowa=mysqli_fetch_assoc($resultt)){
 
    echo $rowa['name']; ;
}
    
     
}

?>