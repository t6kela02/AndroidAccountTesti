<?php
    

    $con = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");//("my_host", "my_user", "my_password", "my_database");

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($connect, "SELECT * FROM user WHERE username = ?");
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_id, $name, $username, $age, $password);
    
    echo json_encode($name);

    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        
        $response["success"] = true;  
        $response["name"] = $name;
        $response["age"] = $age;
    }

    echo json_encode($response);
?>
