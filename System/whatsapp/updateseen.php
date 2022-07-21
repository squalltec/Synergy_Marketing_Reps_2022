<?php

session_start();


include("../db_connection.php");

$id=$_POST['id'];
$myid=$_SESSION['user_id'];

		
			
$sql = "UPDATE chat SET seen='1' WHERE sid='$id' && rid='$myid' && seen='0'";

 $result = $conn->query($sql);


if ($result === TRUE) {
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
 
 
 
 
 
 
 
 
 
 


?>
















    