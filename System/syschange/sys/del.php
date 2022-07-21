<?php
session_start();
include('db_connection.php');

$table=$_GET['tbuser'];
$iduser=$_GET['iduser'];
echo $table;
echo $iduser;

$sql = "UPDATE $table SET DEL='1' WHERE id='$iduser'";

if ($conn->query($sql) === TRUE) {
  header("Location:" . $_SERVER['HTTP_REFERER']);
  
} else {
     header("Location:" . $_SERVER['HTTP_REFERER']);
 
}

$conn->close();
?>