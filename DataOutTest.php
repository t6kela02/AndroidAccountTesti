<?php

    $con = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");

    $user_id = $_POST["user_id"];

    $selectUser = $con->prepare("SELECT * FROM `data` WHERE `user_id` = ?");
    $selectUser->bind_param('i', $user_id);
    $selectUser->execute();
    $result = $selectUser->get_result();

    //$stmt->bind_result($id, $first_name, $last_name, $username);

    $response = array();
    $response["success"] = false;

    while($row = $result->fetch_assoc())
    {
        $response["success"] = true;  
        $response = array($row);
    }

    echo json_encode($response);

?>
