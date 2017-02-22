<?php

	$_POST = json_decode(file_get_contents('php://input'), true);

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
		$temp_date = strtotime($_POST['client_date']);
	 	$date  = date('M d,Y', $temp_date);
			$sql = "INSERT INTO contract_information 
						(
							client_to, client_date, client_email,
							client_phone_1, client_address, client_phone_2,
							client_work_address, 

							company_from, company_phone,company_email,

							project_title, project_description,

							payment_sum, payment_data_cotract,payment_amount,
							payment_on, payment_balance
						)
						
						VALUES

						(
							'".$_POST['to']."','".$date."','".$_POST['email']."',
							'".$_POST['phone1']."','".$_POST['address']."','".$_POST['phone2']."',
							'".$_POST['work_address']."',

							'".$_POST['company_from']."','".$_POST['company_phone1']."','".$_POST['company_email']."',

							'".$_POST['project_title']."','".$_POST['project_description']."',

							'".$_POST['payment_agree_sum']."','".$_POST['payment_date_contract']."','".$_POST['payment_amount']."',
							'".$_POST['payment_on']."','".$_POST['payment_balance']."'
						)";

				if ($conn->query($sql) === TRUE) {
				     echo "New record created successfully";
				} else {
				     echo "Error: " . $sql . "<br>" . $conn->error;
				}
		$conn->close();

?>
