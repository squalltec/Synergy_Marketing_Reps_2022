<?php
include '../db_connection.php';

$senderr = $_POST['reciever'];
$recieverr = $_POST['sender'];

$messagerr = $_POST['messager'];


$today=date("Y-m-d");
$time=date("h:ia");

if($messagerr!=''){

$sql ="INSERT INTO chat (sid, rid, msg,date,time) VALUES ('$senderr', '$recieverr', '$messagerr', '$today', '$time')";

 $result = $conn->query($sql);


if ($result === TRUE) {
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}

?>