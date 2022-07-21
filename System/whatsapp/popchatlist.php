<?php
session_start();
include '../db_connection.php';



              $sidd=$_SESSION['user_id'];
              
               $myid=$_SESSION['user_id'];
              
              
     
       $sqllrr = "SELECT * FROM users WHERE id!='$myid' && DEL='0'";     
              
              
              
              	$resulttrr = $conn->query($sqllrr);

if ($resulttrr->num_rows > 0) {
  // output data of each row
  while($rowwrr = $resulttrr->fetch_assoc()) {
      
     $naam=$rowwrr['name'];
     $tasveer=$rowwrr['image'];
     $uni=$rowwrr['id'];
    
     
     
     
        $sqllrr1 = "SELECT * FROM chat WHERE rid='$uni' || sid='$uni' ";     
              
              
            $msgcount=0;
            
              	$resulttrr1 = $conn->query($sqllrr1);

if ($resulttrr1->num_rows > 0) {
  // output data of each row
  while($rowwrr1 = $resulttrr1->fetch_assoc()) {
     
     
      $seen=$rowwrr1['seen'];
        $reid=$rowwrr1['rid'];
        $maid=$_SESSION['user_id'];
      if($seen=='0' && $reid==$maid){
          $msgcount=$msgcount+1;
      }
     
     $lastmessage=$rowwrr1['msg'];
      $dte=$rowwrr1['date'];
     
  }
  
  
  ?>
  
  

   <label data-name="<?php echo $rowwrr['name']?>" data-id="<?php echo $rowwrr['id'];?>" data-lastname="<?php echo  $rowwrr['lastname'];?>" onclick="getvalue()">
        
    
                <div class="clicked block active">
                    <div class="imgBox">
                      <img src="../Fuser Images/<?php echo $tasveer;?>" class="cover" alt="">
                    </div>
  
                    <div class="details">
                        <div class="listHead">
                            <h4><?php echo $naam?></h4>
                            <p class="time"><?php echo $dte; ?></p>
                        </div>
                        <div class="message_p">
                            <p><?php echo $lastmessage; ?></p>
                            
                            
                         <?php   if($msgcount>0){?>
                           
                            
                       <b><?php echo $msgcount;?></b> 
                           
                           
                           
                          <?php  }?>
            
                        </div>
                    </div>
                </div>
                </label>
  
     <?php
}
  }
}
	  
    ?>    
    
    
    
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
                
                  var element=document.getElementById('messager');
               element.removeAttribute("disabled");
                 
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

  
</script>