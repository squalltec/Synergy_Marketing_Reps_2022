<?php

 session_start();
  $role=$_SESSION['role'];
 $cmpname=$_SESSION['company'];
 $aid=$_SESSION['unique_id'];
 $count22='';
 $output2='';
//fetch.php;
if(isset($_POST["view"]))
{
 include("db_connection.php");
 if($_POST["view"] == 'noti')
 {
	 
	if($role=='admin')
 {
  $update_query = "UPDATE users SET comment_status=1 WHERE comment_status=0";
  mysqli_query($conn, $update_query);
 }
 	

  
 }
 
 
 if($_POST["view"] == 'msg')
 {
  $update_query = "UPDATE messages SET msg_seen=1 WHERE msg_seen=0 AND incoming_msg_id = '$aid'";
  mysqli_query($conn, $update_query);
  
 }
 

 
 
 if($role=='admin')
 {
 $query = "SELECT * FROM users ORDER BY id DESC";
 $result = mysqli_query($conn, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["company"].'</strong><br />
     <small><em>created user '.$row["name"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
  $output=$output."<a href='#'><li style='float:right;'class='av-link'><strong>Clear All</strong></li></a>";
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_2 = "SELECT * FROM invitation WHERE comment_status=0";
 $result_2 = mysqli_query($conn, $query_2);
 $count2 = mysqli_num_rows($result_2);
 
 $query_1 = "SELECT * FROM users WHERE comment_status=0";
 $result_1 = mysqli_query($conn, $query_1);
 $count = mysqli_num_rows($result_1);
 
 $count=$count+$count2;
 }
 
 else{
     

 $query_2 = "SELECT * FROM invitation WHERE comment_status=0 AND company='$cmpname'";
 $result_2 = mysqli_query($conn, $query_2);
 $count22 = mysqli_num_rows($result_2);
 
  if(mysqli_num_rows($result_2) > 0)
 {
  while($roww = mysqli_fetch_array($result_2))
  {
 
    $output2 .= '
   <li>
    <a href="http://www.t-synergies.com/systemm/video/index.php">
     <strong>'.$cmpname.'</strong><br />
     <small><em>created Conference Invitation</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
 
     
  }
 }
 }
 
 
 
 
 
 
 
 
 
  $query_12 = "SELECT * FROM messages WHERE msg_seen=0 AND incoming_msg_id = '$aid'";
 $result_12 = mysqli_query($conn, $query_12);
 $count2 = mysqli_num_rows($result_12);
 
 
 
 
 
 
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count,
  'unseen_notification2' => $count2
 );
 echo json_encode($data);
}
?>