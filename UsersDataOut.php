<?php
    $con = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");
    
    $selectUser = $con->prepare("SELECT * FROM `data`");
    $selectUser->execute();
    $result = $selectUser->get_result();
    
    $response = array();
    $response["success"] = false;
    
    while($row = $result->fetch_assoc())
    {
        $response["success"] = true;  
        $response["data"][] = $row;
    }
    
    echo json_encode($response);
?>
