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
	if($id != ''){
		$sql = "SELECT * FROM contract_information WHERE contract_information_id = ".$id."";
	}else{
		$sql = "SELECT * FROM contract_information ORDER BY client_date DESC  ";
	}

	$result = $conn->query($sql);
	$data = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	return print json_encode($data);

	$conn->close();


?>
