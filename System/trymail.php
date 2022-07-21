<?php

$username="info@t-synergies.com";
$password="Shaktimaan@29";
$hostname="{imap.hostinger.com:993/imap/ssl}INBOX";

$imap=imap_open($hostname,$username,$password) or die('Cannot connect: '.imap_last_error());
$message_count = imap_num_msg($imap);
echo "<b>$message_count messages</b><br>";

for ($i = 1; $i <= 10; ++$i){
  $header = imap_header($imap, $i);
  $body = imap_fetchbody($imap, $i, '2');
  $prettydate = date("jS F Y", $header->udate);

  if(isset($header->from[0]->personal)){
    $personal = $header->from[0]->personal;
  }else{
    $personal = $header->from[0]->mailbox;
  }

  $subject=$header->Subject;
  $email = "$personal <{$header->from[0]->mailbox}@{$header->from[0]->host}>";
  echo "<a href='https://www.gmail.com'><li>From: $email<br/>";
   echo "<small>$prettydate</small>";
  echo '</li></a><hr>';
}
print_r(imap_errors());
imap_close($imap);

?>