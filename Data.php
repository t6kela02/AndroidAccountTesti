<?php
    
    $connect = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");
    
    $name = $_POST["name"];
    $age = $_POST["age"];
    $username = $_POST["username"];
    $password = $_POST["password"];
     
    $statement = mysqli_prepare($connect, "INSERT INTO data (seconds, beacon_name) VALUES (?, ?)");
    mysqli_stmt_bind_param($statement, "is", $seconds, $beacon_name);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);     
   
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
