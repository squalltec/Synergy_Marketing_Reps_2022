	<?php

session_start();

require 'QRCode.class.php'; // Include the QRCode class

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
 <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="html2canvas.js"></script>
    <script>
      $( document ).ready(function() {
        window.scrollTo(0, 0);

        html2canvas(document.getElementById("about")).then(function (canvas) {
          var ajax = new XMLHttpRequest();
          ajax.open("POST", "save-capture.php", true);
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




 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section  class="content-header">
          <h1>
            Dashboard
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            
            





   
<a href='uploads/<?php echo $_SESSION['user_id'];?>.jpeg' id='download' download>Download</a>
  
    <section >
     <div id="about" style="width:950px; height:550px; background-color:black;">

			
            <img style="margin-top:10px; margin-right:10px; float:right; width:20%;" src='floweer.jpeg'>
           
         <img style=" margin-top:10px; margin-left:10px; width:30%;" src='../logoo.png'>
           
           <br/> <br/> <br/> <br/><br/> <br/> 
            <h1 align='center' style='font-size:4em; margin-top:-50px; color:gold;' ><?php echo $_SESSION['user_name'].' '.$_SESSION['user_lastname'];?></h1>
            <br/>
            <h4 align='center' style='font-size:2.5em; margin-top:-60px; color:white;' ><?php echo $_SESSION['ucountry'];?></h4>
            <br/>
            <h4 align='center' style='font-size:2em; margin-top:-50px; color:white;' >Email: <?php echo $_SESSION['user_email'];?></h4>
            <h4 align='center' style='font-size:2em; margin-top:-50px; color:white;' >Phone: <?php echo $_SESSION['user_contact'];?></h4>
            <h4 align='center' style='font-size:2em; margin-top:-50px; color:white;' >Website: <?php echo $_SESSION['user_website'];?></h4>



</div>
    </section><!-- #about -->
</section>
</div>

