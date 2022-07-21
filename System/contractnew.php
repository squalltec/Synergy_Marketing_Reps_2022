 <?php
 session_start();
include('header.php');


require_once "db_connection.php";




if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}






if (isset($_POST['submit'])) {
    
    
    
    $cntt=$_POST['country'];
												$sqllas ="SELECT * FROM countries WHERE id='$cntt'";
		$resulttas = $conn->query($sqllas);

	
	
if ($resulttas->num_rows > 0) {
  // output data of each row
  while($rowwas = $resulttas->fetch_assoc()) {
      	$_SESSION['cont_country']=$rowwas['name'];
      
  }
    
}
    
    
    
    	$_SESSION['cont_title']=$_POST['title'];
	

	$_SESSION['cont_name']=$_POST['name'];
	$_SESSION['cont_designation']=$_POST['designation'];
	$_SESSION['cont_passport']=$_POST['passport'];

	$_SESSION['cont_country']=$_POST['country'];
	$_SESSION['cont_city']=$_POST['city'];
	$_SESSION['cont_address']=$_POST['address'];
	$_SESSION['cont_phone']=$_POST['phone'];
	$_SESSION['cont_email']=$_POST['email'];
	$_SESSION['cont_sdate']=$_POST['sdate'];
	$_SESSION['cont_edate']=$_POST['edate'];
	


echo "<script>location.replace('contractdes.php');</script>";
	
	

}
?>

 
 
   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Create Contract
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Contracts</a></li>
            <li class="active">Create Contract</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		
         
         <form method='POST' action='#'>
             
              <div class="form-group">
                     
                      <select name="title" class="form-control">
                           <option>
                           <?php 
                          $tty= $_SESSION['ownerrtitle'];
                          if($tty==''){
                              echo "Select Title";
                          }else{
                          echo $_SESSION['ownerrtitle'];
                          }
                          ?>
                          </option>
                          <option>Mr.</option>
                          <option>Mrs.</option>
                          <option>Miss.</option>
                          <option>Prof.</option>
                          <option>Dr.</option>
                          </select>
                    </div>
                    
                    
                    
           <div class="form-group">
                     
                      <input required  type="text" value='<?php echo $_SESSION['ownerrname'];?>' name="name" class="form-control" placeholder="Name"/>
                    </div>
                    
                    
                     <div class="form-group">
                     
                      <input required  type="text" value='<?php echo $_SESSION['ownerrdesignation'];?>' name="designation" class="form-control" placeholder="Designation"/>
                    </div>
         
             <div class="form-group">
                     
                      <input required  type="text" name="passport" class="form-control" placeholder="Passport Number"/>
                    </div>
                    
                    
                        <div class="form-group">
                     
                      <select  type="text" name="country" id='country' class="form-control">
                          <option selected><?php 
                          $ctry= $_SESSION['ownerrcountry'];
                          if($ctry==''){
                              echo "Select Country";
                          }else{
                              
                         echo $_SESSION['ownerrcountry']; 
                          
                          
                          }
                          ?>
                          
                          </option>
                          
                          
 	<?php
												$sqlla ="SELECT * FROM countries";
		$resultta = $conn->query($sqlla);

	
	
if ($resultta->num_rows > 0) {
  // output data of each row
  while($rowwa = $resultta->fetch_assoc()) {
	
		     
													     
	?>
	
	

		<option value="<?php echo $rowwa['id'];?>"><?php echo $rowwa['name']; ?> </option>
	
	


<?php
}
}
?>
 
 
          
                          
                          
                          </select>
                          
                    </div>
		  
		  
		  
		   <div class="form-group">
                     
                      <select  type="text" name="city" id='city' class="form-control">
                         <option selected><?php echo $_SESSION['ownerrcity'];?></option>
                          </select>
                          </div>
                          
                          
                          
                          
                          
                          
                          
                           <div class="form-group">
                     
                      <input required type="text" value='<?php echo $_SESSION['ownerraddress'];?>' name="address" class="form-control" placeholder="Address"/>
                    </div>  
                          
                          
                                <div class="form-group">
                     
                      <input required type="text" value='<?php echo $_SESSION['ownerrphone'];?>' id='phone' name="phone" class="form-control" placeholder="+00000000"/>
                    </div>
                          
                          
                         <div class="form-group">
                     
                      <input required type="text" value='<?php echo $_SESSION['ownerremail'];?>' id='email' name="email" class="form-control" placeholder="example@example.com"/>
                    </div>           
                          
                          
                           <div class="form-group">
                     <label>Starting Date</label>
                      <input required type="date" id='sdate' value='<?php echo date("Y-m-d");?>' name="sdate" class="form-control"/>
                    </div>    
                    
                    
                    
                    <?php
  
    $date = date("Y-m-d");
    $newDate = date('Y-m-d', strtotime($date. ' + 2 years'));
    
  
   
  
?>
              
                          
                                <div class="form-group">
                     <label>Ending Date</label>
                      <input required type="date" id='edate' value='<?php echo $newDate;?>' name="edate" class="form-control"/>
                    </div>           
                          
                          
                          
                          
                          
                          <input style='background-color:gold;' class='form-control' type='submit' name='submit'>
                          
                          
                          
                          </form>
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
		  
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      
      <script>
          
    $("#country").on('change', function() {
	

	var	compy1 = $("#country").val();
	

	
	
	
	
	
	
	  $.ajax({
              type:'POST',
              url:'getcity.php',
              data:{'compy1':compy1},
              success:function(result){
                 
                  $('#city').html(result);
                  
                 
              }
          }); 
          
          
     	  $.ajax({
              type:'POST',
              url:'getphoncode.php',
              data:{'compyy1':compy1},
              success:function(result){
                 
             
                p="+"+result;
              
              
                $('#phone').val(p)
              
                  
                 
              }
             
          }); 
          
          
                          
    });
    
    
          
      </script>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
     