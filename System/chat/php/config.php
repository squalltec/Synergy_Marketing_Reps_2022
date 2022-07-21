<?php


  $hostname = "localhost";
  $username = "u534286154_ma";
  $password = "Shaktimaan@29";
  $dbname = "u534286154_ma";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>

