<?php 

session_start();
require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}

if (isset($_POST['submit'])) {
	
	
	


	
$companyname = $_POST['companyname'];
$companyemail =$_POST['companyemail'];
$country = $_POST['country'];
$city = $_POST['city'];
$address = $_POST['address'];
$owner = $_POST['owner'];
$lisencestartdate = $_POST['lisencestartdate'];
$lisenceenddate = $_POST['lisenceenddate'];
$lisencenumber = $_POST['lisencenumber'];

$phone = $_POST['phone'];
$website =$_POST['website'];




	mkdir("Local Company Lisences/".$companyname);	
	

		
		
		
		
	  $filename = $_FILES['myfile']['name'];
	  $destination = 'Local Company Lisences/'. $companyname . '/' . $filename;
	  $extension = pathinfo($filename, PATHINFO_EXTENSION);
	  $file = $_FILES['myfile']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
			
$sql ="INSERT INTO local_company (companyname, companyemail,country,city,address,owner,lisencestartdate,lisenceenddate,lisencenumber,lisence,phone,website ) VALUES ('$companyname', '$companyemail','$country','$city','$address','$owner','$lisencestartdate','$lisenceenddate','$lisencenumber','$filename','$phone','$website')";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

		}


}
?>

<html>

<form action="#" method="post" enctype="multipart/form-data">



<input type="text" name="companyname" value="" placeholder="Company Name" required>

<input type="text" name="companyemail" value="" placeholder="Company Email" required>
 
 
<input type="text" name="country" value="" placeholder="Country" required>	
 
 

<input type="text" name="city" value="" placeholder="City" required>

<input type="text" name="address" value="" placeholder="Address" required>

<input type="text" name="owner" value="" placeholder="Owner" required>


<input type="date" name="lisencestartdate" required>


<input type="date" name="lisenceenddate" required>


<input type="text" name="lisencenumber" value="" placeholder="Lisence Number" required>



<input type='file' value="Upload Lisence" name="myfile" required>



<input type="text" name="phone" value="" placeholder="Phone" required>


<input type="text" name="website" value="" placeholder="Website" required>



 
 <input type="submit" name="submit" value="Submit">
 



</form>
</br>


<a href="dashboard.php"> Dashboard </a>
</html>