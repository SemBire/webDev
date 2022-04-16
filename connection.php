<?php

$conn = "";

try {
	$servername = "localhost:3306";
	$dbname = "BuddyGuy";
	$username = "BuddyGuy";
	$password = "TwrUgx6a";

	$conn = new PDO(
		"mysql:host=$servername; dbname=BuddyGuy",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
