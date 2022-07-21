<?php
 session_start();
include('header.php');




include('db_connection.php');


if(isset($_POST['submit'])){
    
    $cn=$_POST['CN'];
    $location=$_POST['Location'];
    $date=$_POST['Date'];
    $time=$_POST['Time'];
    $venue=$_POST['Venue'];
    
    
    $sql="INSERT INTO meetingletter (cn,location,date,time,venue,status)VALUES('$cn','$location','$date','$time','$venue','Pending')";
    
    
    
    
    $result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

    
    
}




 
 ?>
 
 
 
   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Create Meeting
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Create Meeting</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		
          <div class="row">
		  		 
		  	
		  	
		  	
		  	


<form method='POST' action='#'>
    
 
<input type="text" id="search-box" name='CN' placeholder="Client Name" />
<div id="suggesstion-box"></div>
</br>




     <input type='text' name='Location' placeholder='Location'>
      <input type='date' name='Date'>
       <input type='time' name='Time'>
        <input type='text' name='Venue' Placeholder='Venue'>
         <input type='submit' value='submit' name='submit'>
    
    
</form>



		  		 
		  		 
		  		 
		  		 
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      
      
      
     


<script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "getresult.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>





