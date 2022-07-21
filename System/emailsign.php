<?php 
session_start();
$role=$_SESSION['role'];

if($role=='admin')
{
include 'header.php';
}
else{
  include 'header_owner.php';  
}

?>
<html>
    
    
    
    
    



 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section  class="content-header">
          <h1>
            Business Card
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Business Card</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            
            
    
    
      
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.container {
  position: relative;
  text-align: center;
 
  
}

.top-left {
  position: absolute;
  top: 4%;
  left: 33%;
  font-size:2vw;
  
  
}
.top-left2 {
  position: absolute;
  top: 16%;
  left: 33%;
  font-size:1vw;
  
  
}

.top-left3 {
  position: absolute;
  top: 32%;
  left: 33%;
  font-size:1.5vw;
  
  
}
.top-left4 {
  position: absolute;
   top: 45%;
  left: 33%;
  font-size:1.5vw;
  
  
  
}
.top-left5 {
  position: absolute;
    top: 62%;
  left: 33%;
  font-size:1.5vw;
  
  
}
.top-left6 {
  position: absolute;
 top: 78%;
  left: 33%;
  font-size:1.5vw;
  
  
}
.top-left7 {
  position: absolute;
 bottom:1%;
 right:2%;

 max-width:15%;
  
  
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>



<div id='sign' class='container'>
    <img style='width:100%;' src='emailsigntemplate.png'>
    <div class='top-left'>
          <?php echo $_SESSION['user_name'].' '.$_SESSION['user_lastname'];?>
        
    </div>
    
     <div class='top-left2'>
          <?php echo $_SESSION['user1_designation'];?>
        
    </div>
     <div class='top-left3'>
          <?php echo $_SESSION['user_contact'];?>
        
    </div>
      <div class='top-left4'>
          <?php echo $_SESSION['user_email'];?>
        
    </div>
      <div class='top-left5'>
          <?php echo $_SESSION['user_website'];?>
        
    </div>
      <div class='top-left6'>
          <?php echo $_SESSION['user1_address'];?>
        
    </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


    <script src="html2canvas.js"></script>
    <script>
      $( document ).ready(function() {
        window.scrollTo(0, 0);

        html2canvas(document.getElementById("sign")).then(function (canvas) {
          var ajax = new XMLHttpRequest();
          ajax.open("POST", "qr/save-capture2.php", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));

          ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                
              console.log(this.responseText);
             // document.getElementById('download').click();
             // window.location.href = "../login.php";
            }
          };
        });
      });
      
    </script>



</section>


<a href='qr/uploadssign/<?php echo $_SESSION['user_id'];?>.jpeg' id='download' download>Download</a>


</div>




</html>