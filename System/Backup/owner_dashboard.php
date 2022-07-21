<?php


session_start();
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}
 $str=$_SESSION['company'];
 
 
 $str = str_replace(' ', '', $str);
 
 $str= strtolower($str);
 
 echo $str;
 
 
 
 
 
   $connn=mysqli_connect('localhost','root','',$str);
      if(!$connn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
  
  $sql = "CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL,
    password TEXT NOT NULL,
    username TEXT NOT NULL,
    country TEXT NOT NULL,
    city TEXT NOT NULL,
    birthday TEXT NOT NULL,
    zoom TEXT NOT NULL,
    company TEXT NOT NULL,
    phone TEXT NOT NULL,
    designation TEXT NOT NULL,
    department TEXT NOT NULL,
    website TEXT NOT NULL,
    relevantinformation TEXT NOT NULL,
    image TEXT NOT NULL,
    role TEXT NOT NULL
)";

if ($connn->query($sql) === TRUE) {
	
  echo "table created successfully";
  
  
  
  
 $sql = "CREATE TABLE appointments(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    appointment TEXT NOT NULL,
    company TEXT NOT NULL,
    date TEXT NOT NULL,
    time TEXT NOT NULL
   
)";

if ($connn->query($sql) === TRUE) {
	
  echo "table created successfully";
  
  
} else {
  echo "Error creating table: " . $connn->error;
}  
  
  
  
  
  
  
  
  
  
} else {
  echo "Error creating table: " . $connn->error;
}
  
  
  
  



?>


<h1>Company Logged in</h1>

<a href="create_owner_user.php">Create User<a/>