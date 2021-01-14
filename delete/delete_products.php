<?php 
	include '../connection.php';

	$id = $_POST['id'];
 	
 	try {
 		$sqlDelete = "delete from products where id = '$id'";
 		$result = mysqli_query($connection, $sqlDelete);

 		header("location: ../index.php");

 	} catch (Exception $e) {
 		echo "An error ocurred!";
 	}

?>