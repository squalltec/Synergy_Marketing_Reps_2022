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

require 'qr/QRCode.class.php'; // Include the QRCode class

try {
    /**
     * If you have PHP 5.4 or higher, you can instantiate the object like this:
     * (new QRCode)->fullName('...')->... // Create vCard Object
     */
    $oQRC = new QRCode; // Create vCard Object
    
    $oQRC->fullName($_SESSION['user_name'])// Add Full Name
   
	->workPhone($_SESSION['user_contact'])
    ->email($_SESSION['user_email'])// Add Email Address
    
   
    ->finish(); // End vCard

    // echo '<p><img src="' . $oQRC->get(300) . '" alt="QR Code" /></p>'; // Generate and display the QR Code
 
   // echo '<p><img src="' . $oQRC->get(300) . '" alt="QR Code" /></p>'; // Generate and display the QR Code
    
    $url = $oQRC->get(300);
$img = 'floweer.jpeg';
file_put_contents($img, file_get_contents($url));



} catch (Exception $oExcept) {
    echo '<p><b>Exception launched!</b><br /><br />' .
        'Message: ' . $oExcept->getMessage() . '<br />' .
        'File: ' . $oExcept->getFile() . '<br />' .
        'Line: ' . $oExcept->getLine() . '<br />' .
        'Trace: <p/><pre>' . $oExcept->getTraceAsString() . '</pre>';
}


?>

    <script src="html2canvas.js"></script>
    <script>
      $( document ).ready(function() {
        window.scrollTo(0, 0);

        html2canvas(document.getElementById("about")).then(function (canvas) {
          var ajax = new XMLHttpRequest();
          ajax.open("POST", "qr/save-capture.php", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));

          ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                
              console.log(this.responseText);
              //document.getElementById('download').click();
              //window.location.href = "../login.php";
            }
          };
        });
      });
      
    </script>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            
            





   
<a href='qr/uploads/<?php echo $_SESSION['user_id'];?>.jpeg' id='download' download>Download</a>
  
   
   
   
   
   
   
   
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.container {
  position: relative;
  text-align: center;
 
  
}

.top-left {
  position: absolute;
  top: 16%;
  left: 18%;
  font-size:3vw;
  
  
}
.top-left2 {
  position: absolute;
  top: 24%;
  left: 18%;
  font-size:2vw;
  
  
}

.top-left3 {
  position: absolute;
  top: 47%;
  left: 18%;
  font-size:2vw;
  
  
}
.top-left4 {
  position: absolute;
 top: 54%;
  left: 18%;
  font-size:2vw;
  
  
  
}
.top-left5 {
  position: absolute;
   top: 61%;
  left: 18%;
  font-size:2vw;
  
  
}
.top-left6 {
  position: absolute;
  top: 68%;
  left: 18%;
  font-size:2vw;
  
  
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






<div id='about'>
    

<div class="container">
  <img src="layout.png" alt="" style="width:100%;">

  <div class="top-left">
<?php echo $_SESSION['user_name'].' '.$_SESSION['user_lastname'];?>

</div>

  <div class="top-left2">
<?php echo $_SESSION['user1_designation'];?>

</div>
  
    <div class="top-left3">
<?php echo $_SESSION['user_contact'];?>

</div>

    <div class="top-left4">
<?php echo $_SESSION['user_email'];?>

</div>

    <div class="top-left5">
<?php echo $_SESSION['user_website'];?>

</div>
  
      <div class="top-left6">
<?php echo $_SESSION['user1_address'];?>

</div>
  
        <div class="top-left7">
<img style="width:100%" src='floweer.jpeg'>

</div>
  
  
</div>




</div>
   
   
   
   
   




  

   
</section>
</div>

