
<?php
session_start();
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$to = $_SESSION['sendmail']; 
$from = 'md@travelsynergies.com'; 
$fromName = 'SMR System'; 
$subject = "SMR System Credentials";
$em=$_SESSION["sendbmail"];
$pas=$_SESSION["sendbpassword"];
$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to SMR System</title> 
    </head> 
    <body> 
        <h1>Thank you for joining SMR!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
          
             
             
                <th>Email: </th><td>'.$em.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Password:</th><td>'.$pas.'</td> 
            </tr> 
            <tr> 
                <th>Access System:</th><td><a href="https://t-synergies.com/systemm/DISTI/login.php">Click Here</a></td> 
            </tr> 
        </table> 
    </body> 
    </html>'; 
 

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$fromName.'<'.$from.'>' . "\r\n" .
"Reply-To: md@travelsynergies.com" . "\r\n" .
"X-Mailer: PHP/" . phpversion();


// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    $_SESSION['sendmail']='';
       $_SESSION['sendbmail']='';
       $_SESSION['sendbpassword']='';
       
     
            header('Location: create_user_owner.php');
       
}else{ 
   echo 'Email sending failed.'; 
}

  

?>