<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "posts";
	$post = $_GET["post"];
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "insert into post (post)
		values('$post')";
		//$conn->exec($sql);
		echo "Posted!";
	}
	catch(PDOException $e)
    {
		echo $sql . "<br>" . $e->getMessage();
    }
	header("Location: index.html");
	$conn = null;
?>