<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<label>
                    
                    <div class="block">
                   <div style="width:60px; height:60px;" class="imgBox">
                        <img style="width:100%; height:100%;" src="../../../Fuser Images/'. $row['image'] .'" alt="">
                    </div>
                    <div class="details">
                        <div class="listHead">
                            <h4>'. $row['name']. " " . $row['lastname'] .'</h4>
                            
                        </div>
                        <div class="message_p">
                            <p>'. $you . $msg .'</p>
                        </div>
                    </div>
                </div>
                   
                    
                    
                    
                </label>';
    }
?>