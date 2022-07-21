<?php 
session_start();
?>
<html>

<div id='sign' style='background-color:white;'>


<style>


.column {
  float: left;
  width: 10%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}










    .v{ 
        border-left: 6px solid #cfb53b;
  height: 200px;
        
    }
</style>

<div class='row'>
    <div class='column'>
        <br/><br/>
<img style='width:80%;' src='logoo.png'>
</div>
  <div class='column'>
<div class='v'></div>
</div>
  <div style='margin-left:-6%;' class='column'>
      
    
   <h3>   <?php echo $_SESSION['user_name'].' '.$_SESSION['user_lastname'];?></h3>
<h3><?php echo $_SESSION['user_contact'];?></h3>
<h3><?php echo $_SESSION['user_email'];?></h3>
<h3 ><?php echo $_SESSION['user_website'];?></h3>

</div>
</div>





<a href='qr/uploadssign/<?php echo $_SESSION['user_id'];?>.jpeg' id='download' download>Download</a>




<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
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








</html>