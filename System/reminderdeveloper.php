
<?php
session_start();
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$to = 'developer@royalgardenme.com'; 
$from = 'md@travelsynergies.com'; 
$fromName = 'SMR System'; 
$subject = "Create Subdomain and Email";
$em=$_SESSION["sendbmail"];
$pas=$_SESSION["sendbpassword"];

$subdomain=$_SESSION["subdomain"];


$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to SMR System</title> 
    </head> 
    <body> 
        <h1>Create Email and Sub-domain</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
          
             
             
                <th>Email: </th><td>'.$em.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Password:</th><td>'.$pas.'</td> 
            </tr> 
            <tr> 
                <th>Subdomain:</th><td>'.$subdomain.'</td>
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
   
            header('Location: testmail.php');
       
}else{ 
   echo 'Email sending failed.'; 
}

  

?>