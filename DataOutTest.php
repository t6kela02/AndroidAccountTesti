<?php
// Connecting, selecting database
$link = mysql_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i")
    or die('Could not connect: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('accountit') or die('Could not select database');

//$user_id = $_POST["user_id"];

// Performing SQL query
$statement = mysqli_prepare('SELECT * FROM data');

$result = mysql_query($statement) or die('Query failed: ' . mysql_error());

$response = array();

// Printing results in HTML
$response = "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $response = "\t<tr>\n";
    foreach ($line as $col_value) {
        $response = "\t\t<td>$col_value</td>\n";
    }
    $response = "\t</tr>\n";
}
$response = "</table>\n";
echo json_encode($response);

// Free resultset
mysql_free_result($result);

// Closing connection
mysql_close($link);
?>
