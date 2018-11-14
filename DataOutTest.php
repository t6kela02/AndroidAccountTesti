<?php
// Connecting, selecting database
$link = mysql_connect("den1.mysql3.gear.host", "accountit", "Ru8tmg~976-i")
    or die('Could not connect: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('accountit') or die('Could not select database');

$user_id = '2';

// Performing SQL query
$statement = mysqli_prepare('SELECT * FROM data WHERE user_id = ?');
$statement->bind_param("i", $user_id);
$statement->execute();

$result = mysql_query($statement) or die('Query failed: ' . mysql_error());

// Printing results in HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
mysql_free_result($result);

// Closing connection
mysql_close($link);
?>
