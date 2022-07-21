<?php

session_start();

include("db_connection.php");

$srch=$_POST['srch'];



			
$sqllas = "SELECT * FROM local_company WHERE (companyname LIKE '%$srch%' OR speciality LIKE '%$srch%' OR country LIKE '%$srch%' OR city LIKE '%$srch%' OR phone LIKE '%$srch%' OR website LIKE '%$srch%') && DEL='0'";
 
 
 
 
 $result=$conn->query($sqllas);
 $data = array();

$images = array();


while($row=mysqli_fetch_assoc($result)){
    
	?>
	


  
 
<div onclick="location.href='edit_local_company.php?dan=<?php echo $row['id'];?>';" style="cursor: pointer;" align="center" class="containeer gallery">



    <img src="Local Company Lisences/<?php echo $row["logo"];?>" alt="">
 
 
 <div class="pp">
 <i style="color:white;" class="fa fa-user" aria-hidden="true"></i><p align="center" class="f" style="font-size:100%;"><?php echo $row["companyname"];?></p>

 <a href="tel:<?php echo $row["phone"];?>"><i class="fa fa-phone" style="color:white !important;" aria-hidden="true"></i><p align="center" class="f" style="color:white !important; font-size:100%;"> <?php echo $row["phone"];?></p></a>
<a href="mailto:<?php echo $row["email"];?>"> <i style="color:white !important;" class="fa fa-envelope" aria-hidden="true"></i><p align="center" class="f" style="color:white !important; font-size:100%;"> <?php echo $row["website"];?></p></a>
 </div>
 
  
</div>

	
	
	
	
	
<?php	
	
	 
}

			
			
			
			
			
			
			
			
			
			
		




?>