<?php

session_start();

$role=$_SESSION['role'];


if($role=='admin'){
include 'header.php';
}

else{
    include 'header_owner.php';
}









$name=$_SESSION['user1_name'];
$designation=$_SESSION['user1_designation'];
$email=$_SESSION['user1_email'];
$address=$_SESSION['user1_address'];
$phone=$_SESSION['user1_phone'];

$country=$_SESSION['user1_country'];

    
    
    

$template_file_name = 'template.docx';
 
$fileName = "letterhead.docx";
 

$full_path = $fileName;
 
try
{
    
    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);
 
    // add calss Zip Archive
    $zip_val = new ZipArchive;
 
    //Docx file is nothing but a zip file. Open this Zip File
    if($zip_val->open($full_path) == true)
    {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.
         
        $key_file_name = 'word/document.xml';
        $message = $zip_val->getFromName($key_file_name);                
                     
        $timestamp = date("Y-m-d");
         
        // this data Replace the placeholders with actual values
        $message = str_replace("Client_Name",      $name,       $message);
        $message = str_replace("Client_Email",  $email,  $message);
        $message = str_replace("Date",            $timestamp,             $message);      
        $message = str_replace("Client_Phone",        $phone,   $message);      
        $message = str_replace("Client_Address",  $address,          $message);
        $message = str_replace("Client_Country",  $country,          $message);
        $message = str_replace("Designation",  $designation,          $message);
       
       
     
         
        //Replace the content with the new content created above.
        $zip_val->addFromString($key_file_name, $message);
        $zip_val->close();
    }
    
    
    
}
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}
    
   
    
    
    

?>















      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section  class="content-header">
          <h1>
            Letterhead
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Letterhead</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            
            
            
            <a href='letterhead.docx' class="btn btn-dark" download>Download LetterHead</a>
            
            

</section>
</div>






