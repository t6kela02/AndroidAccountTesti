<?php
    
    $connect = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");
    
    
    $sql = "SELECT * FROM data";
    $result = mysqli_query($connect, $sql);

    $json_array = array();
    
    while($row = mysqli_fetch_assoc($statement))
    {
        $json_array[] = $row;
    }
    
    echo '<pre>';
    print_r($json_array);
    echo '</pre>';
?>
