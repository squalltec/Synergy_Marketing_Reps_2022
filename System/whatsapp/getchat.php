<?php

session_start();




include("../db_connection.php");
$id=$_POST['id'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];

		
			
$sqllas = "SELECT * FROM users WHERE id='$id' && name='$name' && lastname='$lastname' && DEL='0'";
 
 $result=$conn->query($sqllas);



while($row=mysqli_fetch_assoc($result)){
    
    $uid=$row['id'];
    $mid=$_SESSION['user_id'];
    
    $_SESSION['sender_id']=$uid;

echo '
 <div class="userimg">
                        <img onclick="change2()" src="../Fuser Images/'.$row["image"].'" alt="" class="cover">
                    </div>
                    <h4>'.$row["name"].' <br><span>'.$row["status"].'</span></h4>
                    

<div style="z-index:1;" class="one2" id="visible-block2">
  <div class="overlay2"></div>
  <div class="middle2" id="visible2">
    <div class="overlay22" onclick="rrr2()"></div>
    <div class="two2">

      <div style="align:center; margin:0 auto;">
          
      <small>Name:</small>
      <h2>'.$row["name"].' '.$row["lastname"].'</h2>
      
      <small>Status:</small<br/>
      <label>'.$row['bio'].'</label>
      
      
    </div>
   
    </div>
  </div>
</div>
      </div>
      
      
      
      ';
      
      
                    
                    
}

?>








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
      function change2() {
  document.getElementById('visible2').style.top = "0";
  document.getElementById('visible-block2').style.top = "0";
}
function rrr2() {
  document.getElementById('visible2').style.top = "-100%";
  document.getElementById('visible-block2').style.top = "-100%";
}
</script>
        
       
     



