<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "posts";
	
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("select post, dateAndTime from post");
	$stmt->execute();
	$myarr = array();
	
	while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
		array_push($myarr, $data);
	}
	echo json_encode($myarr);
?>