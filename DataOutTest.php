<?php
    
    $connect = mysqli_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i", "accountit");
    
    //$user_id = $_POST["user_id"];

    $sql = "SELECT * FROM data WHERE beacon_name='%s'", . mysql_real_escape_string($_POST['beacon_name'] .);

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
