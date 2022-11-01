<?php
	include 'php.php';
	$start=$_POST['start'];
	$end=$_POST['end'];
	$adults=$_POST['adults'];
	$kids=$_POST['kids'];
	$sql = "INSERT INTO `rent`( `start`, `end`, `adults`, `kids`) 
	VALUES ('$start','$end','$adults','$kids')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>