

<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

















           
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
       
         



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMR - Chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="leftSide">
            <!-- Header -->
            <div class="header">
                <div class="userimg">
                   
          
          
            
                    
                    
                    
                    <img src="../../../Fuser Images/<?php echo $row['image']; ?>" alt="" class="cover">
                      <span><?php echo $row['name']. " " . $row['lastname'] ?></span>
                      <p><?php echo $row['status']; ?></p>
         
                </div>
                <ul class="nav_icons">
                   
                    <li><ion-icon name="chatbox"></ion-icon></li>
                    
                </ul>
            </div>
            <!-- Search Chat -->
            
       
  
  
            <div class="search_chat">
                <div class="search">
                   
                    <input type="text" placeholder="Search or start new chat">
        <button style='display:none;'><ion-icon name="search-outline"></ion-icon> </button>
      
                    
                </div>                
            </div>
            <!-- CHAT LIST -->
            <div class="chatlist">
                <input type="submit" id="abc" value="BAC">
                 <div class="users-list">
  
      </div>
                
                <script src="javascript/users.js"></script>
 
                <div class="block active">
                       
  
 

                    <div class="imgBox">
                        <img src="images/img1.jpg" class="cover" alt="">
                    </div>
                    <div class="details">
                        <div class="listHead">
                            <h4>Jhon Doe</h4>
                            <p class="time">10:56</p>
                        </div>
                        <div class="message_p">
                            <p>How are you doing?</p>
                        </div>
                    </div>
                </div>
                
                
                
              
            </div>
        </div>
        <div class="rightSide">
            <div class="header">
                <div class="imgText">
                    <div class="userimg">
                        <img src="images/img1.jpg" alt="" class="cover">
                    </div>
                    <h4>Qazi <br><span>online</span></h4>
                </div>
                <ul class="nav_icons">
                    <li><ion-icon name="search-outline"></ion-icon></li>
                    <li><ion-icon name="ellipsis-vertical"></ion-icon></li>
                </ul>
            </div>

            <!-- CHAT-BOX -->
            <div class="chatbox">
                <div class="message my_msg">
                    <p>Hi <br><span>12:18</span></p>
                </div>
                <div class="message friend_msg">
                    <p>Hey <br><span>12:18</span></p>
                </div>
                <div class="message my_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br><span>12:15</span></p>
                </div>
                <div class="message friend_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br><span>12:15</span></p>
                </div>
                <div class="message my_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque aliquid fugiat accusamus dolore qui vitae ratione optio sunt <br><span>12:15</span></p>
                </div>
                <div class="message friend_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br><span>12:15</span></p>
                </div>
                <div class="message my_msg">
                    <p>Lorem ipsum dolor sit amet consectetur <br><span>12:15</span></p>
                </div>
                <div class="message friend_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><span>12:15</span></p>
                </div>
                <div class="message my_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><span>12:15</span></p>
                </div>
                <div class="message friend_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><span>12:15</span></p>
                </div>
                <div class="message my_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><span>12:15</span></p>
                </div>
                <div class="message friend_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><span>12:15</span></p>
                </div>
                <div class="message my_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><span>12:15</span></p>
                </div>
                <div class="message friend_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><span>12:15</span></p>
                </div>
                <div class="message my_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><span>12:15</span></p>
                </div>
                <div class="message friend_msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><span>12:15</span></p>
                </div>
            </div>
            
            <!-- CHAT INPUT -->
            <div class="chat_input">
                <ion-icon name="happy-outline"></ion-icon>
                <!-- <ion-icon name="happy-outline"></ion-icon> -->
                <input type="text" placeholder="Type a message">
                <ion-icon name="mic"></ion-icon>
            </div>
        </div>
    </div>

<label class='block'>asadasdad</label>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
  

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    
    



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">



 $("label").click(function() {
   
 
    alert('abc');


});
</script>










    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>