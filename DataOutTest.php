<?php
    
    $connect = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");
    
    $user_id = 2;

    $sql = "SELECT * FROM data WHERE (user_id) VALUES (?)";
    mysqli_stmt_bind_param($sql, "i", $user_id);
    mysqli_stmt_execute($sql);

    $result = mysqli_query($connect, $sql);

    $json_array = array();

    $json_array["success"] = false;  
    
    while($row = mysqli_fetch_assoc($result))
    {
        $json_array["success"] = true;  
        $json_array[] = $row;
    }
    
    echo json_encode($json_array);
?>
