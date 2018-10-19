<?php
  $host = "box5329.bluehost.com";
  $database = "remembw5_WPWWU";
	$username = "remembw5_court";
	$password = "tryingtomakeupnewpasswordsistough";

	// Create connection
	$connection = new PDO("mysql:dbname=" . $database . ";host=" . $host, $username, $password);

	// Query the table for memories data
	$query = "SELECT * FROM `_WWU_memories`";

	// Pass query to MySQL database
	$data = $connection -> query($query)->fetchAll();

	//Return the results to jquery function
	foreach ($data as $row) {
		$result = array("name"=>$row["name"],"message"=>$row["message"]);

   	echo $result;
	}
?>

