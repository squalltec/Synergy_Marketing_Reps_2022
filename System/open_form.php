<?php
 session_start();
include('header.php');


$dan = $_GET[dan];

$dann = $_GET[dann];









require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}







if (isset($_POST['submit'])) {
	
$zero = $_POST['0'];
$one = $_POST['1'];
$two = $_POST['2'];
$three = $_POST['3'];
$four = $_POST['4'];
$five = $_POST['5'];
$six = $_POST['6'];
$seven = $_POST['7'];
$eight = $_POST['8'];
$nine = $_POST['9'];
$ten = $_POST['10'];
$eleven = $_POST['11'];
$twelve = $_POST['12'];
$thirteen = $_POST['13'];
$fourteen = $_POST['14'];
$fifteen = $_POST['15'];
$sixteen = $_POST['16'];
$seventeen = $_POST['17'];
$eighteen = $_POST['18'];
$ninteen = $_POST['19'];
$twenty = $_POST['20'];

$filledby = $_SESSION['user_name'];
$filledbycompany = $_SESSION['company'];

$formattachment=$dann;
$formimage=$dann;




	mkdir("Appointment Attachments/".$formattachment);	
	mkdir("Appointment Images/".$formimage);	
	


	
	  $imagename = $_FILES['image']['name'];
	  $destinationn = 'Appointment Images/'. $formimage . '/' . $imagename;
	  $extensionn = pathinfo($imagename, PATHINFO_EXTENSION);
	  $filee = $_FILES['image']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($filee, $destinationn)) {




		
		
		
		
	  $attachname = $_FILES['attachment']['name'];
	  $destination = 'Appointment Attachments/'. $formattachment . '/' . $attachname;
	  $extension = pathinfo($attachname, PATHINFO_EXTENSION);
	  $file = $_FILES['attachment']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {



















		
$sql ="UPDATE client_form SET zero='$zero',one='$one', two='$two', three='$three', four='$four',five='$five',six='$six',seven='$seven',eight='$eight',nine='$nine',ten='$ten',eleven='$eleven',twelve='$twelve',thirteen='$thirteen',fourteen='$fourteen',fifteen='$fifteen',sixteen='$sixteen',seventeen='$seventeen',eighteen='$eighteen',nineteen='$ninteen',twenty='$twenty',filledby='$filledby',filledbycompany='$filledbycompany',attachment='$attachname',image='$imagename' WHERE appointmentname='$dan'";

$result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





}

}
}







 
 ?>
 
 
   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Form
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Form</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		
          <div class="row">
		  		 
		
<form action="#" method="post" enctype="multipart/form-data">
<div class="container">
<div id='qs'>
 
 <label>How many bookings do you currently handle?</label>

<textarea name='0' id='0'rows='6' class='form-control'></textarea>

<button type='button' id='0' value='0'> speak </button>


</br>
 
<label>Are you currently dealing with anyone?</label>

<textarea name='1' id='1'rows='6' class='form-control'></textarea>

<button type='button' id='1' value='1'> speak </button>
</br>

<label>What is the name of the company your dealing with currently? </label>
<textarea name='2' id='2'rows='6' class='form-control'></textarea>
<button type='button' id='2' value='2'> speak </button>
</br>

<label>Are you happy with their services?</label>
<textarea name='3' id='3'rows='6' class='form-control'></textarea>
<button type='button' id='3' value='3'> speak </button>
</br>


<div style='display:none;' id='oneyes'>
<!--if1yes-->
<label>Are you willing to give us a chance to offer our products and services?</label><textarea name='4' id='4'rows='6' class='form-control'></textarea><button type='button' id='4' value='4'> speak </button></br>
<div style='display:none;' id='twoyes'>
<label>What are the services that you would like to get from us? Hotels / transfers / tours</label><textarea name='5' id='5'rows='6' class='form-control'></textarea><button type='button' id='5' value='5'> speak </button></br><label>Remarks:</label><textarea name='6' id='6'rows='6' class='form-control'></textarea><button type='button' id='6' value='6'> speak </button></br><label>Points Discussed:</label><textarea name='7' id='7'rows='6' class='form-control'></textarea><button type='button' id='7' value='7'> speak </button></br><label>Follow up Points:</label><textarea name='8' id='8'rows='6' class='form-control'></textarea><button type='button' id='8' value='8'> speak </button></br>
</div>
<div style='display:none;' id='twono'>
<label>What are the challenges that you are facing with your current company?</label><textarea name='9' id='9'rows='6' class='form-control'></textarea><button type='button' id='9' value='9'> speak </button></br><label>What would you like us to concentrate on?</label><textarea name='10' id='10'rows='6' class='form-control'></textarea><button type='button' id='10' value='10'> speak </button></br><label>What are your top 10 hotels?</label><textarea name='11' id='11'rows='6' class='form-control'></textarea><button type='button' id='11' value='11'> speak </button></br><label>Remarks:</label><textarea name='12' id='12'rows='6' class='form-control'></textarea><button type='button' id='12' value='12'> speak </button></br><label>Points Discussed:</label><textarea name='13' id='13'rows='6' class='form-control'></textarea><button type='button' id='13' value='13'> speak </button></br><label>Follow up Points:</label><textarea name='14' id='14'rows='6' class='form-control'></textarea><button type='button' id='14' value='14'> speak </button></br>
</div>
</div>


<!--ifoneno-->

<div style='display:none;' id='oneno'>

<label>What are the challenges that you are facing with your current company?</label><textarea name='15' id='15'rows='6' class='form-control'></textarea><button type='button' id='15' value='15'> speak </button></br><label>What would you like us to concentrate on?</label><textarea name='16' id='16'rows='6' class='form-control'></textarea><button type='button' id='16' value='16'> speak </button></br><label>What are your top 10 hotels?</label><textarea name='17' id='17'rows='6' class='form-control'></textarea><button type='button' id='17' value='17'> speak </button></br><label>Remarks:</label><textarea name='18' id='18'rows='6' class='form-control'></textarea><button type='button' id='18' value='18'> speak </button></br><label>Points Discussed:</label><textarea name='19' id='19'rows='6' class='form-control'></textarea><button type='button' id='19' value='19'> speak </button></br><label>Follow up Points:</label><textarea name='20' id='20'rows='6' class='form-control'></textarea><button type='button' id='20' value='20'> speak </button></br>

</div>


</br>
</br>
<label>Select Attachment</label>
<input required type='file' name='attachment'id='attachment' value='select attachment'>
<label>Select Picture</label>
<input required type='file' name='image'id='image'  value='select image'>

</br>
</br>
</div></div>

<input type='submit' name='submit' value='Submit'>

</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>




$("#3").change(function(event) {


var text=document.getElementById("3").value;
if(text.includes('yes')){

var oneyess=document.getElementById("oneyes");

oneyess.style.display="block";









$("#4").change(function(event) {

var textt=document.getElementById("4").value;
if(textt.includes('yes')){



var twonoo=document.getElementById("twono");

twonoo.style.display="block";

var twoyess=document.getElementById("twoyes");

twoyess.style.display="none";

}

else if(textt.includes('no')){
	
	
var twoyess=document.getElementById("twoyes");

twoyess.style.display="block";

var twonoo=document.getElementById("twono");

twonoo.style.display="none";



}
})












}
else if(text.includes('no')){


var onenoo=document.getElementById("oneno");

onenoo.style.display="block";

}

 

})






var speechRecognition = window.webkitSpeechRecognition

var recognition = new speechRecognition()

var fired_button='';

recognition.lang="en-GB";


var content = ''

recognition.continuous = false


recognition.onresult = function(event) {
var textbox= $("#"+fired_button);

 var current = event.resultIndex;

 var transcript = event.results[current][0].transcript



 content = transcript
 
 textbox.val(content)
 
 }


$("button").click(function() {
    fired_button = $(this).val();
   
	recognition.start()
});

textbox.on('input', function() {

 content = $(this).val()

})
 
</script>



		  		 
		  		 
		  		 
		  		 
		  		 
		  		 
		  		 
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     