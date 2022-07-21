
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



$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . $password. "' and DEL='0'");
if(!empty($result)){
    
     
if ($row = mysqli_fetch_array($result)) {
     
     
$_SESSION['user_id'] = $row['id'];
$_SESSION['user_website'] = $row['website'];
$_SESSION['company'] = $row['company'];
$_SESSION['ucountry'] = $row['country'];
$_SESSION['ucity'] = $row['city'];
$_SESSION['user_name'] = $row['name'];
$_SESSION['user_email'] = $row['email'];
$_SESSION['user_contact'] = $row['phone'];
$_SESSION['image'] = $row['user_image'];
$_SESSION['role'] = $row['role'];
$_SESSION['user_image'] = $row['image'];
$_SESSION['meme'] ='';
$_SESSION['unique_id'] = $row['unique_id'];


$_SESSION['user_lastname'] = $row['lastname'];



$_SESSION['user1_name'] = $row['name'].' '.$row['lastname'];

$_SESSION['user1_email'] = $row['email'];
$_SESSION['user1_phone'] = $row['phone'];
$_SESSION['user1_address'] = $row['address'];
$_SESSION['user1_country'] = $row['country'];

$_SESSION['user1_designation'] = $row['designation'];









$_SESSION['CFU'] = $row['CFU'];
$_SESSION['CU'] = $row['CU'];
$_SESSION['C'] = $row['C'];
$_SESSION['CCC'] = $row['CCC'];
$_SESSION['CC'] = $row['CC'];
$_SESSION['COA'] = $row['COA'];
$_SESSION['CA'] = $row['CA'];
$_SESSION['VC'] = $row['VC'];
$_SESSION['canDELL'] = $row['canDEL'];

 $status = "Online";
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
	
	
$result = mysqli_query($conn, "SELECT * FROM customer WHERE email = '" . $email. "' and password = '" . $password. "' and DEL='0'");
if(!empty($result)){
if ($row = mysqli_fetch_array($result)) {
$_SESSION['user_id'] = $row['id'];
$_SESSION['company'] = $row['company'];
$_SESSION['user_name'] = $row['name'];
$_SESSION['user_lastname'] = $row['lastname'];
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


$uid=$row['id'];
 $status = "Online";
 
               
$sql2 ="UPDATE users SET status = '{$status}' WHERE id = '$uid'";

 $result2 = $conn->query($sql2);


if ($result2 === TRUE) {
  
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











<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="login.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="login_main.jpg" alt="">
		
        <div class="text">
		<img style="margin-top:-50%;width:350; height:auto;" src="logo.png"/>
		
          <span class="text-1">Welcome to<br> Travel Synergies</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="login_main.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
			
			
			
			
			
			
<form action="#" method="post">


            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" value="" placeholder="Enter your email" required>
				

              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
				<input type="password" placeholder="Enter your password" name="password" value="" required="">

			
              </div>
			  
<p style="color:red;"><?php echo $_SESSION['meme'];?></p>
             
              <div class="button input-box">
                <input type="submit" name="login" value="Submit">
				
				

              </div>
              <div class="text sign-up-text">Want to know about us?  <label for="flip"> Click Here </label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
            </br></br></br></br></br>
  <div class="title">About Us</div>
 <h3 align="center">Travel Synergies provides support to its members in a professional yet friendly environment, knowledge sharing and best practices to propel the growth of both individuals and businesses. So whether it is sharing knowledge, training, or a roundup of industry events, we stay focused meeting training and mentoring needs that are based on industry requirements.</h3>
   
              <div class="text sign-up-text">Have an account? <label for="flip">Login now</label></div>
            
    </div>
    </div>
    </div>
  </div>
</body>
</html>
