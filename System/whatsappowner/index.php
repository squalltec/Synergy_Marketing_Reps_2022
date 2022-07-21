<?php
session_start();
require_once '../db_connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMR - Chat</title>
    <link rel="stylesheet" href="style.css">
    
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
  

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    
    
</head>
<body>
    <div class="container">
        
      
        
        
        
        
        
        
        
        
        
        
        <div class="leftSide">
            <!-- Header -->
            <div class="header">
                <div class="userimg">
                    
                    <img onclick="change()" src="../Fuser Images/<?php echo $_SESSION['user_image']; ?>" alt="" class="cover">
                    
                </div>
                <ul class="nav_icons">
                   <!-- <li><ion-icon name="scan-circle-outline"></ion-icon></li>-->
                    <li class='myBtn' id='myBtn'><ion-icon name="chatbox"></ion-icon></li>
                    
                    
                    
                    <!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div  id="myModal" class="modal">

  <!-- Modal content -->
  <div style='width:800px;' class="modal-content">
    <span id='close' class="close">&times;</span>
   
   
   
     <div style="margin: auto;
width: 60%; overflow:scroll; width:500px; height:500px;" class="chatlist">
         
         <h3 align='center'>Start new Conversation</h3>
         <br/>
         
         	<?php	
				$mdi=$_SESSION['user_id'];
				
				$cmp=$_SESSION['company'];
				
		
$sqlla ="SELECT * FROM users WHERE id!='$mdi' && (company='$cmp' || role='admin') && DEL='0'";
		$resultta = $conn->query($sqlla);

if ($resultta->num_rows > 0) {
  // output data of each row
  while($rowwa = $resultta->fetch_assoc()) {
      
     ?>
      
      
      
      <label data-name="<?php echo $rowwa['name']; ?>" data-id="<?php echo $rowwa['id']; ?>" data-lastname="<?php echo $rowwa['lastname']; ?>" onclick='getvalue()'>
        
              
                <div class="block active">
                    <div class="imgBox">
                        <img src="../Fuser Images/<?php  echo $rowwa['image']; ?>" class="cover" alt="">
                    </div>
                    <div class="details">
                        <div class="listHead">
                            <h4><?php  echo $rowwa['name'].' '. $rowwa['lastname']; ?></h4>
                            
                        </div>
                    
                    </div>
                </div>
      </label>
      
      
      
      <?php
  }
}
	  ?>
  
         
         
         
         
         
         
         
         
         
         
         



            
            
            
            </div>
   
   
   
   
   
   
   
   
   
   
   
  </div>

</div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <style>
                        .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
                    </style>
                 
                    
                    
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

                   <!-- <li><ion-icon name="ellipsis-vertical"></ion-icon></li>-->
                </ul>
            </div>
            <!-- Search Chat -->
            <div class="search_chat">
                <div>
                    <input type="text" placeholder="Search or start new chat">
                    <ion-icon name="search-outline"></ion-icon> 
                </div>                
            </div>
            <!-- CHAT LIST -->
            <div id='chatlist' class="chatlist">
                
                

                
          
            </div>
        </div>
        <div class="rightSide">
           
           
           
           
            <div class="header">
                <div id='imgTxt' class="imgText">
                    
                    
                   
                    
                    
                    
                </div>
                
            </div>


<form>

<style>
      .scrr{ margin:4px, 4px;
                padding:4px;
                
               
                height: 600px;
                overflow-x: hidden;
                overflow-y: auto;
                text-align:justify;
      }
</style>
<div class='' id='chatbox'>

          
            
            </div>
            
             <div style="position:absolute; bottom:0;" class="chat_input">
               <!-- <ion-icon name="happy-outline"></ion-icon>-->
                <!-- <ion-icon name="happy-outline"></ion-icon> -->
                <input id="messager" type="text" name="messager" placeholder="Type a message">
               
                <nonsense id='sendme' value="submit" onclick="return clickButton();"> <ion-icon name="send"></ion-icon></nonsense>
                <!--<ion-icon name="mic"></ion-icon>-->
            
            </div>
           
            </form>
            
        </div>
        
        
        
           
      

<div class="one" id="visible-block">
  <div class="overlay"></div>
  <div class="middle" id="visible">
    <div class="overlay2" onclick="rrr()"></div>
    <div class="two">
      
      
      <?php
      
      $midi=$_SESSION['user_id'];
      	
$sqllac ="SELECT * FROM users WHERE id='$midi'";
		$resulttac = $conn->query($sqllac);

if ($resulttac->num_rows > 0) {
  // output data of each row
  while($rowwac = $resulttac->fetch_assoc()) {
      ?>
      <div style='align:center; margin:0 auto;'>
          
      <small>Name:</small>
      <h2><?php echo $rowwac['name'];?> <?php echo $rowwac['lastname'];?></h2>
      
      <small>Status:</small<br/>
      <input style='display:none;' name='bioid' id='bioid' value='<?php echo $_SESSION['user_id'];?>'>
      <input name='status' id='bio' value="<?php echo $rowwac['bio'];?>">
      <input onclick='biochange()' type='submit' name='submit' value='Change'>
      
      
    </div>
    <?php  
  }
}
      
      
      
      
      
      ?>
      
      
      
      
      
    </div>
  </div>
</div>

<style>
    .one {
  position: fixed;
  top: -100%;
  left: 0;
  width: 100%;
  height: 100%;
  transition: all .1s ease-in-out;
  -moz-transition: all .1s ease-in-out;
  -webkit-transition: all .1s ease-in-out;
  -ms-transition: all .1s ease-in-out;
}

.overlay {
  background:rgb(255,215,0,0.5);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.overlay2 {
  background: rgb(255,215,0,0.5);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.middle {
  position: relative;
  width: 100%;
  height: 100%;
  top: -100%;
  transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -webkit-transition: all .5s ease-in-out;
  -ms-transition: all .5s ease-in-out;
}

.two {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  width: 60%;
  height: 60%;
  background: white;
}
</style>
        
      <script>
      function change() {
  document.getElementById('visible').style.top = "0";
  document.getElementById('visible-block').style.top = "0";
}
function rrr() {
  document.getElementById('visible').style.top = "-100%";
  document.getElementById('visible-block').style.top = "-100%";
}
</script>
        
       
        
        
        
<style>
    .one2 {
  position: fixed;
  top: -100%;
  left: 0;
  width: 100%;
  height: 100%;
  transition: all .1s ease-in-out;
  -moz-transition: all .1s ease-in-out;
  -webkit-transition: all .1s ease-in-out;
  -ms-transition: all .1s ease-in-out;
}

.overlay2 {
  background:rgb(255,215,0,0.5);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.overlay22 {
  background: rgb(255,215,0,0.5);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.middle2 {
  position: relative;
  width: 100%;
  height: 100%;
  top: -100%;
  transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -webkit-transition: all .5s ease-in-out;
  -ms-transition: all .5s ease-in-out;
}

.two2 {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  width: 60%;
  height: 60%;
  background: white;
}
</style>
        
      <script>
      
      
            
      document.getElementById('messager').onkeydown = function(e){
   if(e.keyCode == 13){
     document.getElementById('sendme').click();
   }
};
      
      
      
      
      function change2() {
  document.getElementById('visible2').style.top = "0";
  document.getElementById('visible-block2').style.top = "0";
}
function rrr2() {
  document.getElementById('visible2').style.top = "-100%";
  document.getElementById('visible-block2').style.top = "-100%";
}
</script>
        
       
     
        
        
        
        
        
        
        
        
    </div>


<style>
    #scrr{
        padding-left:30px;
         padding-right:30px;
    }
</style>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">




          
setInterval(function () {
    
       $.ajax({
              type:'POST',
              url:'popchatlist.php',
             
              success:function(result){
                 
             
                 $("#chatlist").html(result);
                
              }
            
          });


    
    
  var objDiv = document.getElementById("scrr");
 

 
 
  if(objDiv.scrollTop > 0)
  
  {
      //alert('');
  }
  else{
      
       $.ajax({
              type:'POST',
              url:'updatechat.php',
             
              success:function(result){
                 
             
                 $("#chatbox").html(result);
                
              }
            
          });
          
        
  
  }
  






     
          
}, 1000);

    
    
    function biochange(){
         var bio=document.getElementById('bio').value;
         var id=document.getElementById('bioid').value;
         
         
           $.ajax({
              type:'POST',
              url:'changebio.php',
              data:{'id':id,'bio':bio},
              success:function(result){
                 
             
                 $("#bio").value(result);
                
                 
                 
              }
               
          }); 
    
    
    
        
    }


function clickButton(){
    var sender=document.getElementById('sender').value;
    var reciever=document.getElementById('reciever').value;
    var messager=document.getElementById('messager').value;
  
    $.ajax({
        type:"post",
        url:"send.php",
        data: 
        {  
           'sender' :sender,
           'reciever' :reciever,
           'messager' :messager
        },
        cache:false,
        success: function (html) 
        {
            document.getElementById("messager").value = "";
          
           //alert(html);
           
        }
    });
    
 }
</script>












<script type="text/javascript">




 $("label").click(function() {
    var name = $(this).data('name');
    var id = $(this).data('id');
    var lastname = $(this).data('lastname');
   
     $.ajax({
              type:'POST',
              url:'getchat.php',
              data:{'id':id,'name':name,'lastname':lastname},
              success:function(result){
                 
             
                 $("#imgTxt").html(result);
                
                 
                 
              }
               
          }); 
    

    
     
     $.ajax({
              type:'POST',
              url:'getchat2.php',
              data:{'id':id,'name':name,'lastname':lastname},
              success:function(result){
                 
             
                 $("#chatbox").html(result);
                
                   $("#close").click();
                 
              }
               
          });
    
    
    
    
    
    
         $.ajax({
              type:'POST',
              url:'updateseen.php',
              data:{'id':id},
              success:function(result){
                 
             
              
                
                 
                 
              }
               
          }); 
    
    
    
    
    
    
    
    
    
    
});

  


  



 $('.block').on('click', function() {
    
     const collection = document.getElementsByClassName("block");


     for (var i = 0; i < collection.length; ++i) {
       
      collection[i].classList.remove("active");
}
   
       
       this.classList.add("active");
      
    });

   
</script>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>