<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "zacharymisic", "aiW7ooga", "zacharymisic");

/* check connection */
if ($mysqli->connect_errno) {
	echo("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$result = mysqli->query("SELECT * FROM Users");

echo "<html><body><table border='1'>
<tr>
<th>User ID</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['user_id'] . "</td>";
echo "</tr>";
}
echo "</table></body></html>";

$mysqli->close();

?>