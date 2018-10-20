<?php
	$host = "box5329.bluehost.com";
  $database = "remembw5_WPWWU";
	$username = "remembw5_court";
	$password = "tryingtomakeupnewpasswordsistough";

  try {
  	// Create connection
		$connection = new PDO("mysql:dbname=" . $database . ";host=" . $host, $username, $password);
    
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query the table to insert new memories data
		$query = "INSERT INTO `_WWU_memories` (name, email, message) 
		VALUES (:name, :email, :message)";

		//prepare statement
		$stmt = $connection->prepare($query);
    
		//replace values in statement with response from POST request
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    // insert a row
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $message = $_POST['contact-message'];

    //execute statement
    $stmt->execute();

    echo "New record created successfully";
   }
	catch(PDOException $e) {
    echo $query . "<br>" . $e->getMessage();
  }

	$connection = null;
?>