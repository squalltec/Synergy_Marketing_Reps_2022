
<?php
session_start();
$_SESSION['meme'] ='';


require_once "db_connection.php";
if(isset($_SESSION['user_id'])!="") {
header("Location: dashboard.php");
}



if (isset($_POST['login'])) {
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);



$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . $password. "'");
if(!empty($result)){
    
     
if ($row = mysqli_fetch_array($result)) {
     
     
$_SESSION['user_id'] = $row['id'];
$_SESSION['company'] = $row['company'];
$_SESSION['user_name'] = $row['name'];
$_SESSION['user_email'] = $row['email'];
$_SESSION['role'] = $row['role'];
$_SESSION['meme'] ='';
$_SESSION['unique_id'] = $row['unique_id'];

$_SESSION['CFU'] = $row['CFU'];
$_SESSION['CU'] = $row['CU'];
$_SESSION['C'] = $row['C'];
$_SESSION['CCC'] = $row['CCC'];
$_SESSION['CC'] = $row['CC'];
$_SESSION['COA'] = $row['COA'];
$_SESSION['CA'] = $row['CA'];
$_SESSION['VC'] = $row['VC'];

 $status = "Active now";
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                   header("Location: dashboard.php");
                }
                
                
                
                
                
                if ($_SESSION['role']=="customer"){
header("Location: customer_dashboard.php");
}

else if ($_SESSION['role']=="owner"){
header("Location: owner_dashboard.php");
}
else if ($_SESSION['role']=="partner"){
header("Location: partner_dashboard.php");
}
else if ($_SESSION['role']=="staff"){
header("Location: staff_dashboard.php");
}

else if ($_SESSION['role']=="sales"){
header("Location: sales_dashboard.php");
}

else if ($_SESSION['role']=="accounts"){
header("Location: accounts_dashboard.php");
}



}









else{
	
	
$result = mysqli_query($conn, "SELECT * FROM customer WHERE email = '" . $email. "' and password = '" . $password. "'");
if(!empty($result)){
if ($row = mysqli_fetch_array($result)) {
$_SESSION['user_id'] = $row['id'];
$_SESSION['company'] = $row['company'];
$_SESSION['user_name'] = $row['name'];
$_SESSION['user_email'] = $row['email'];
$_SESSION['role'] = $row['role'];
$_SESSION['meme'] ='';

$_SESSION['unique_id'] = $row['unique_id'];

$_SESSION['CFU'] = $row['CFU'];
$_SESSION['CU'] = $row['CU'];
$_SESSION['C'] = $row['C'];
$_SESSION['CCC'] = $row['CCC'];
$_SESSION['CC'] = $row['CC'];
$_SESSION['COA'] = $row['COA'];
$_SESSION['CA'] = $row['CA'];
$_SESSION['VC'] = $row['VC'];



 $status = "Active now";
                $sql2 = mysqli_query($conn, "UPDATE customer SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    header("Location: customer_dashboard.php");
                }





if ($_SESSION['role']=="admin"){
header("Location: dashboard.php");
}

else if ($_SESSION['role']=="owner"){
header("Location: owner_dashboard.php");
}
else if ($_SESSION['role']=="partner"){
header("Location: partner_dashboard.php");
}
else if ($_SESSION['role']=="staff"){
header("Location: staff_dashboard.php");
}

else if ($_SESSION['role']=="sales"){
header("Location: sales_dashboard.php");
}

else if ($_SESSION['role']=="accounts"){
header("Location: accounts_dashboard.php");
}

else if ($_SESSION['role']=="customer"){
header("Location: customer_dashboard.php");
}





} 

else{
	
	
	
	
	$_SESSION['meme'] ='Invalid Email or Password';
	
}



}



	
	



	
}














}








}








?>





<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Synergy Reps Marketing</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Welcome to<br/> Synergy Marketing Reps</h4>
                                    <form action="#" method='POST'>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name='email' class="form-control" placeholder='Email Address'>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name='password' class="form-control" placeholder='Password'>
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                          <p align='center' style="font-size:1.2em; color:red;"><?php echo $_SESSION['meme'];?></p>
                                          
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" name='login' value='Sign In' class="btn btn-primary btn-block">
                                        </div>
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>

	<script>

     
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 0); 
		});
		jQuery(document).ready(function(){
			setTimeout(function(){
				dlabSettingsOptions.version = 'dark';
				new dlabSettings(dlabSettingsOptions);
			},0)
		});
		
	    </script>
</body>
</html>