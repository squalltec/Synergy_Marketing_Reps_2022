<?php

 session_start();
 
require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}
 
 $companyname=$_SESSION['company'];
 
$sql ="INSERT INTO invitation (company) VALUES ('$companyname')";

 $result = $conn->query($sql);


if ($result === TRUE) {
 header("Location: video/index2.php");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

