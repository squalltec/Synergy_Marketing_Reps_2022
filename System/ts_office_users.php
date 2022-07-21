<?php 

session_start();
require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}

if (isset($_POST['submit'])) {
	

$role = $_POST['forr'];
$email =$_POST['email'];
$password =$_POST['password'];
$name = $_POST['name'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$company = $_POST['company'];
$designation =$_POST['designation'];
$city = $_POST['city'];
$department =  $_POST['department'];
$birthday =$_POST['birthday'];
$website =$_POST['website'];
$zoom = $_POST['zoom'];
$relevantinformation =$_POST['relevantinformation'];
$image = 'image1';


$sql ="INSERT INTO ts_office_users (name, email,password,username,country,city,birthday,zoom, company, phone, designation, department, website, relevantinformation,image,role ) VALUES ('$name', '$email', '$password', '$username','$country','$city','$birthday','$zoom','$company','$phone','$designation','$department','$website','$relevantinformation','$image','$role')";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




}
?>

<html>

<form action="#" method="post">



<input type="radio" name="forr" value="owner" /> Owner

<input type="radio" name="forr" value="partner" /> Partner

<input type="radio" name="forr" value="staff" /> Staff

 </br>
 </br>
 </br>
 
 


<input type="text" name="name" value="" placeholder="Enter your name" required>
 <input type="text" name="username" value="" placeholder="Enter your username" required>
 <input type="email" name="email" value="" placeholder="Enter your email" required>
 <input type="password" name="password" value="" placeholder="Enter your password" required>
 
 <input type="number" name="phone" value="" placeholder="Enter your phone" required>
 
 <input type="text" name="country" value="" placeholder="Enter your country" required>
 
 
 
   <select name="company">
                    <option value=''>-----SELECT Company-----</option>
            <?php 
                
                $resultt=mysqli_query($conn,'SELECT id,companyname FROM office'); 
                while($row=mysqli_fetch_assoc($resultt)) { 
                    echo "<option value='$row[companyname]'>$row[companyname]</option>"; 
                } 
            ?> 
                </select> 
 
 
 
 
 <input type="text" name="designation" value="" placeholder="Enter your designation" required>
 
 <input type="text" name="city" value="" placeholder="Enter your city" required>
 
 </br>
 </br>
 </br>
 
 <input type="text" name="department" value="" placeholder="Enter your department" required>
 

<label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday" required>
  
 
 <input type="text" name="website" value="" placeholder="Enter your url" required>
 
 
 <input type="text" name="zoom" value="" placeholder="Enter your zoom" required>
 
 
 <input type="text" name="relevantinformation" value="" placeholder="Enter Relevant Information" required>
 
 
 <input type="submit" name="submit" value="Submit">
 



</form>
</br>


<a href="dashboard.php"> Dashboard </a>
</html>