<?php
    
    $connect = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");
    
    $user_id = $_POST["user_id"];

    $statement = mysqli_prepare($connect, "SELECT * FROM data WHERE (user_id) VALUES (2)");
    //$sql = "SELECT * FROM data WHERE (user_id) VALUES (?)";
    mysqli_stmt_bind_param($statement, "i", $user_id);
    mysqli_stmt_execute($statement);

    //$result = mysqli_query($connect, $sql);
    $result = mysqli_query($statement);

    $json_array = array();

    $json_array["success"] = false;  
    
    while($row = mysqli_fetch_assoc($result))
    {
        $json_array["success"] = true;  
        $json_array[] = $row;
    }
    
    echo json_encode($json_array);
?>
