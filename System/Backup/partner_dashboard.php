<?php 
session_start();
require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}

if ($_SESSION['role']!="partner"){
header("Location: login.php");
}

?>

<html>
<h1>Partner Dashboard</h1>
</br>
</br>
<a href="logout.php">Logout</a>
</html>