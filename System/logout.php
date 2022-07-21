<?php 
session_start();


include 'db_connection.php';



$status = "Offline";
 $uid=$_SESSION['user_id'];
               
$sql2 ="UPDATE users SET status = '{$status}' WHERE id = '$uid'";

 $result2 = $conn->query($sql2);


if ($result2 === TRUE) {
  
}





session_destroy();
header("Location: login.php");

?>


