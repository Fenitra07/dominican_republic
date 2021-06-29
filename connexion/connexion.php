<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
 $dbname = "dominican_republic";

	try {
	  $conn = new PDO("mysql:host=$servername;dbname=dominican_republic", $username, $password);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	}
?>
