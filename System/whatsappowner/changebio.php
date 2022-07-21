<?php

session_start();

include("../db_connection.php");
$id=$_POST['id'];
$bio=$_POST['bio'];

$sql = "UPDATE users SET bio='$bio' WHERE id='$id'";
 
 
 
 $result = $conn->query($sql);


if ($result === TRUE) {
  echo $bio;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

