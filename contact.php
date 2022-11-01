<?php
	include 'form.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$sql = "INSERT INTO `form`( `name`, `email`, `number`, `address`) 
	VALUES ('$name' ,'$email' ,'$number','$address')";

	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>