<?php
    
    $connect = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");
    
    $user_id = $_POST["user_id"];
    
    $statement = mysqli_prepare($connect, "SELECT * FROM data WHERE user_id = ?");
    mysqli_stmt_bind_param($statement, "i", $user_id);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $data_id, $user_id, $seconds, $beacon_name);
    
    $response = array();
    $response["success"] = true;  
    


    while ($row = mysql_fetch_array($statement, MYSQL_ASSOC)) {
          
        echo json_encode($statement);
    }

    mysql_free_result($statement);
    
    //echo json_encode($response);
?>