<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "zacharymisic", "aiW7ooga", "zacharymisic");

/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}


$user_id = $_POST['user_id'];
$content = $_POST['content'];
$query = "SELECT TOP 1 * FROM Users WHERE user_id = $user_id";
$exists = mysqli->query($query);

if($exists and $content != ''){

	$pid = mysqli->query("SELECT COUNT(*) FROM Posts");
	$insert = mysqli->query("INSERT INTO Posts (post_id, content, author_id) VALUES ($pid, $content, $user_id)");

	if(!$insert) {
		echo mysqli_error();
	}
	else {
		echo "Post made";
	}

}

$mysqli->close();

?>