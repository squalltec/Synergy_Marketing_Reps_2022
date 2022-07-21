<?php








 session_start();
 $companyname=$_SESSION['company'];
require_once "../db_connection.php";
$sql ="UPDATE invitation SET comment_status='1' WHERE company='$companyname'";

 $result = $conn->query($sql);


if ($result === TRUE) {
header("Location: ../login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>