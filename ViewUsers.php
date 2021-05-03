<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "zacharymisic", "aiW7ooga", "zacharymisic");

/* check connection */
if ($mysqli->connect_errno) {
	echo("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$result = mysqli->query("SELECT * FROM Users");

echo "<table border='1'>
<tr>
<th>Firstname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['user_id'] . "</td>";
echo "</tr>";
}
echo "</table>";

$mysqli->close();

?>