<?php


$mysqli = new mysqli("mysql.eecs.ku.edu", "zacharymisic", "aiW7ooga", "zacharymisic");


/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}


if ( isset($_POST['submit']) ) {

	$user_id = $_POST['user_id'];
	$insert = mysqli->query("INSERT INTO Users (user_id) VALUES ($user_id)");

	if(!$insert) {
		echo mysqli_error();
	}
	else {
		echo "User added";
	}

}
/* close connection */
$mysqli->close();




//Template

/*
$mysqli = new mysqli("mysql.eecs.ku.edu", "zacharymisic", "aiW7ooga", "zacharymisic");


if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$user_id = $_POST['user_id'];
$insert = "INSERT INTO Users (user_id) VALUES ();";


if ($result = $mysqli->query($query)) {

	while ($row = $result->fetch_assoc()) {
		printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
	}
	
	$result->free();
}

$mysqli->close();


*/

?>