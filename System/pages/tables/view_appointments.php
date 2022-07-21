 <?php
 session_start();
include('header.php');

require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}

?>

 
 
 
 