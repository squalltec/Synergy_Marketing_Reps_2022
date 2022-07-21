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


                   
                    		
$sqllasws = "SELECT * FROM chat WHERE (sid='$uid' && rid='$mid') || (sid='$mid' && rid='$uid') ORDER BY id DESC ";
 
 $resultws=$conn->query($sqllasws);

  echo '<div id="scrr" class="scrr chatbox">';

while($rowws=mysqli_fetch_assoc($resultws)){
    
    
    
    
            
            $sender=$rowws['sid'];        
             $reciever=$rowws['rid'];   
             $time=$rowws['time']; 
             
           
             if($sender==$mid)
             {
                  echo ' <div class="message my_msg">
                    <p>'.$rowws['msg'].' <br><span>'.$time.'</span></p>
                </div>';
                 
             }
             
             else{
                 
                  echo ' <div class="message friend_msg">
                    <p>'.$rowws['msg'].' <br><span>'.$time.'</span></p>
                </div>';
                 
             }
           
                  
                    
}

                    
                    
       echo '</div>';    
               
               
               echo '        
            
            <!-- CHAT INPUT -->
           
            <input id="sender" style="display:none;" type="text" name="sender"  value="'.$uid.'" >
                <input id="reciever" style="display:none;" type="text" name="reciever" value="'.$mid.'">
     
            
    
    ';
                              
                    
}

?>














    