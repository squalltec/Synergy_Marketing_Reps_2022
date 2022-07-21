<?php

session_start();

include("db_connection.php");

$srch=$_POST['srch'];



			
$sqllas = "SELECT * FROM international_customer WHERE (name LIKE '%$srch%' OR company LIKE '%$srch%' OR country LIKE '%$srch%' OR city LIKE '%$srch%' OR designation LIKE '%$srch%' OR department LIKE '%$srch%') && DEL='0'";
 
 
 
 
 $result=$conn->query($sqllas);
 $data = array();

$images = array();


while($row=mysqli_fetch_assoc($result)){
    
	?>
	


  
 
<div onclick="location.href='update_international_customers.php?dan=<?php echo $row['id'];?>';" style="cursor: pointer;" align="center" class="containeer gallery">



    <img src="International Customer Images/<?php echo $row["image"];?>" alt="">
 
 
 <div class="pp">
 <i style="color:white;" class="fa fa-user" aria-hidden="true"></i><p align="center" class="f" style="font-size:100%;"><?php echo $row["name"];?></p>

 <a href="tel:<?php echo $row["phone"];?>"><i class="fa fa-phone" style="color:white !important;" aria-hidden="true"></i><p align="center" class="f" style="color:white !important; font-size:100%;"> <?php echo $row["phone"];?></p></a>
<a href="mailto:<?php echo $row["email"];?>"> <i style="color:white !important;" class="fa fa-envelope" aria-hidden="true"></i><p align="center" class="f" style="color:white !important; font-size:100%;"> <?php echo $row["website"];?></p></a>
 </div>
 
  
</div>

	
	
	
	
	
<?php	
	
	 
}

			
			
			
			
			
			
			
			
			
			
		




?>