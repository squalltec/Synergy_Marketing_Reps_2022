<?php
 session_start();
include('db_connection.php');

$table=$_GET['tbuser'];
$iduser=$_GET['iduser'];
echo $table;
echo $iduser;

$sql = "UPDATE $table SET DEL='1' WHERE id='$iduser'";

if ($conn->query($sql) === TRUE) {
    
    if($table=='local_company')
    {
 header('Location: view_local_company.php');
    }
    
    else if($table=='customer')
    {
 header('Location: view_customers.php');
    }
     else if($table=='office')
    {
 header('Location: view_companies.php');
    }
     else if($table=='users')
    {
 header('Location: view_users.php');
    }
    
      else if($table=='international_company')
    {
 header('Location: view_international_company.php');
    }
    
      else if($table=='international_customer')
    {
 header('Location: view_customers_international.php');
    }
  
} else {
     header("Location:" . $_SERVER['HTTP_REFERER']);
 
}

$conn->close();
?>