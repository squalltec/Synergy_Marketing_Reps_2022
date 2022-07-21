<?php 
session_start();
require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}
if ($_SESSION['role']!="staff"){
header("Location: login.php");
}

?>

<html>
<h1>Staff Dashboard</h1>
</br>
</br>
<a href="logout.php">Logout</a>
</html>