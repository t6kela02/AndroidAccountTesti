<?php
    
    $connect = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");
    
    $user_id = $_POST["user_id"];
    $seconds = $_POST["seconds"];
    $beacon_name = $_POST["beacon_name"];
    $date = $_POST["date"];
     
    $statement = mysqli_prepare($connect, "INSERT INTO data (user_id, seconds, beacon_name, date) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "iiss", $user_id, $seconds, $beacon_name, $date);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);     
   
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
