<?php 
session_start();
require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}


if ($_SESSION['role']=="partner"){
header("Location: partner_dashboard.php");
}

else if ($_SESSION['role']=="staff"){
header("Location: staff_dashboard.php");
}


else if ($_SESSION['role']=="owner"){
header("Location: owner_dashboard.php");
}

else if ($_SESSION['role']=="sales"){
header("Location: sales_dashboard.php");
}

else if ($_SESSION['role']=="accounts"){
header("Location: accounts_dashboard.php");
}
?>

<html>


<label>TS Head Office</label>

</br>
</br>


<a href="createprofile.php">Create Profile</a>

</br>
</br>


<a href="createoffice.php">Create TS Office</a>
</br>
</br>
</br>
</br>
</br>
</br>
<label>TS Office</label>
</br>
</br>
<a href="ts_office_users.php">Create Profile Under TS OFFICE </a>
</br>
</br>

<a href="create_local_company.php">Create Local Company</a>
</br>
</br>

<a href="appointment.php">Create Appointments</a>
</br>
</br>

</br>
</br>

<a href="logout.php">Logout</a>
</html>