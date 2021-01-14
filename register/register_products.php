<?php 
	include '../connection.php';

	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$amount = $_POST['amount'];

	try {	

		$sqlInsert = "INSERT INTO products (name, description, price, amount) VALUES ('$name', '$description', '$price', '$amount')";

		$results = mysqli_query($connection, $sqlInsert);	
		
		header("location: ../index.php");

	} catch (Exception $e) {
		echo "An error ocurred!";
	}

  
?>