<?php
  $host = "box5329.bluehost.com";
  $database = "remembw5_WPWWU";
	$username = "remembw5_court";
	$password = "tryingtomakeupnewpasswordsistough";

	// Create connection
	$connection = new PDO("mysql:dbname=" . $database . ";host=" . $host, $username, $password);

	// Query the table for memories data
	$query = "SELECT * FROM `_WWU_memories`ORDER BY input_date DESC";

	// Pass query to MySQL database
	$data = $connection -> query($query)->fetchAll();

	// send data to the front end in json format
	echo json_encode($data);
?>

