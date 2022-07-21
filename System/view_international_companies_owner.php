 <?php


require_once "db_connection.php";


include('header_owner.php');


?>

 
 
 

   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           View Client Companies
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">International Database </a></li>
            <li class="active">View Client Companies</li>
          </ol>
        </section>

       
	   		
        <style>.scrolll{overflow: scroll;}</style>
          <div class="row">
		  
 
     <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
            

              <div class="box">
        
        
        
        
        
                   <style>
div.gallery {
   
  position:relative;
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  min-width: 200px;
   max-width: 200px;
   min-height: 200px;
   max-height: 200px;
   background-color:#222d32;

    display: flex;
  justify-content: center;
  align-items: center;
}

 

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
 
  min-width: 100px;
   max-width: 100px;
   min-height: 100px;
   max-height: 100px;
  
   margin-top:-100px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

div .pp{
    bottom:0;
}
.pp{
    color:white !important;
  position:absolute;
  
  right:auto;
  left:auto;
  
   
  
  


  
   
    
     
  
}
.pin{
    position: absolute;
    right:0;
    top:0;
  
}
</style>


<style>
    .containeer {
  
  position: relative;
}

.xe {
    position: absolute;
    background: red;
    color: white;
    top: -10px;
    right: -10px;
    z-index:3;
}
</style>



<div id='listing' style="margin-left:2%; margin-right:2%; margin-top:4%;" class='notranslate' align="center">
    
    
    
    
    		<?php	
							
			$ucmpp=	$_SESSION['company'];
			
			$sqllsa ="SELECT * FROM office WHERE companyname='$ucmpp'";
		$resulttsa = $conn->query($sqllsa);

 
 
	
	
if ($resulttsa->num_rows > 0) {
  // output data of each row
  while($rowwsa = $resulttsa->fetch_assoc()) {
      
      $usidd=$rowwsa['id'];
      
  }
}
			
				
		
$sqlla ="SELECT * FROM international_company WHERE DEL='0' && createdbycompanyid='$usidd'";
		$resultta = $conn->query($sqlla);

 
 
	
	
if ($resultta->num_rows > 0) {
  // output data of each row
  while($rowwa = $resultta->fetch_assoc()) {
	  ?>
  
 
<div onclick="location.href='edit_international_company_owner.php?dan=<?php echo $rowwa["id"];?>';" style="cursor: pointer;" align="center" class="containeer gallery">



    <img src="International Company Lisences/<?php echo $rowwa["logo"];?>" alt="">
 
 
 <div style='line-height:10pt;' class="pp">
<p align="center" class="f" style="font-size:100%;"><?php echo $rowwa["companyname"];?></p>

<p align="center" class="f" style="color:white !important; font-size:100%;"> <?php


		$asid=$rowwa["country"];
$sqllaf ="SELECT * FROM countries WHERE id='$asid'";
		$resulttaf = $conn->query($sqllaf);

 
 
	
	
if ($resulttaf->num_rows > 0) {
  // output data of each row
  while($rowwaf = $resulttaf->fetch_assoc()) {
      $conty=$rowwaf['name'];
  }
}
 echo $conty;
 ?></p>
<a href="https://<?php echo $rowwa["website"];?>"> <p align="center" class="f" style="color:white !important; font-size:100%;"> <?php echo $rowwa["website"];?></p></a>
 </div>
 
  
</div>



  <?php
}}
?>
           
           
           
           
              </div><!-- /.box -->
			  
			  
			  
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		
		
		
		
		
		
		<script>
		    
		      $("#search").on('keyup', function() {
		
		
		var srch= $("#search").val();
		


 $.ajax({
              type:'POST',
              url:'getcompanysearchinternational.php',
              data:{'srch':srch},
             

			 success:function(result){
                
              
                
			   $("#listing").html(result);
              
			 
                 
                      
                  }
                 
                 
          }); 


		
		  
		  
		
	});
	  
	  
		</script>
		
		
		
		
		
    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>