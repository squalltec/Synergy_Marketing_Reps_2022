<?php

include("db_connection.php");

$comp=$_POST['compy'];
		
 $sqllas = "SELECT * FROM users WHERE company='$comp'";
 
 
 
 
 $result=$conn->query($sqllas);
 $data = array();


while($row=mysqli_fetch_assoc($result)){
    
     echo "<option value='".$row['name']."'>".$row['name']."</option>
    <br>";
}
 
 echo json_encode($data);
    alert($dataa);
    


?>