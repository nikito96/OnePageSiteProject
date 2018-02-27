<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "posts";
	$post = $_GET["post"];
	echo var_dump($post);
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
	$sql = "SELECT * FROM POSTS ORDER BY ID DESC LIMIT 1;";
	$last_post = $conn->exec($sql);
	$conn = null;
?>