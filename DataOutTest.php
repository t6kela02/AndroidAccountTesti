<?php
    
    $connect = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");
    
    
    
    $statement = mysqli_prepare($connect, "SELECT * FROM data WHERE user_id = 2");
    
    $json_array = array();
    
    $response = array();
    $response["success"] = false;  
    
    while($row = mysqli_fetch_assoc($statement))
    {
        $json_array[] = $row;
    }
    
    echo '<pre>';
    print_r($json_array);
    echo '</pre>';
?>
