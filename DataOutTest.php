<?php
    /*
    $connect = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");
    
    $user_id = $_POST["user_id"];

    $statement = mysqli_query($connect, "SELECT * FROM data WHERE user_id = ?");
    //$sql = "SELECT * FROM data WHERE (user_id) VALUES (?)";
    mysqli_stmt_bind_param($statement, "i", $user_id);
    mysqli_stmt_execute($statement);

    //$result = mysqli_query($connect, $sql);
    $result = $statement;

    $json_array = array();

    $json_array["success"] = false;  
    
    while($row = mysqli_fetch_assoc($result))
    {
        $json_array["success"] = true;  
        $json_array[] = $row;
    }
    
    echo json_encode($json_array);
    */

    $con = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");
    $user_id = $_POST["user_id"];
    /*
    $statement = mysqli_prepare($con, "SELECT * FROM data WHERE user_id = ?");
    mysqli_stmt_bind_param($statement, "i", $user_id);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $id, $user_id, $seconds, $beacon_name);
    */

    $selectUser = $con->prepare("SELECT * FROM `data` WHERE `user_id`=?");
    $selectUser->bind_param('i', $user_id);
    $selectUser->execute();
    $result = $selectUser->get_result();
    //$assoc = $result->fetch_assoc();

    $response = array();
    $response["success"] = false;
    

    while($row = $result->fetch_assoc();)
    {
        $response["success"] = true;  
        $response[] = $row;
    }

    /*
    while($row = mysqli_stmt_fetch($statement)){
        $response["success"] = true;
        //$response[] = $row;
        
        $response["seconds"] = $seconds;
        $response["beacon_name"] = $beacon_name;
        
    }
    */
    echo json_encode($response);
?>
