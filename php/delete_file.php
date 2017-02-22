<?php

	$_POST = json_decode(file_get_contents('php://input'), true);
    $id = $_POST['id'];

  $servername = "standard.cugsmutvmhvj.us-east-1.rds.amazonaws.com";
  $username = "scc_contract";
  $password = "BEfWj7CMvwVQfKgF";
  $dbname = "com.secondcityconstruction.contract";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		// die("Connection failed: " . $conn->connect_error);
    	echo "Connection failed: " . $conn->connect_error;

	}

	// sql to delete a record
	$sql = "DELETE FROM contract_information WHERE contract_information_id=".$id."";

	if ($conn->query($sql) === TRUE) {
	    echo "0";
	} else {
	    echo "1";
	    // echo "Error deleting record: " . $conn->error;
	}

	$conn->close();


?>
