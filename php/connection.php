<?php
	$host = "127.0.0.1";
	$user = "root";
	$pw = "";
	$db = "materiales";
	$conn = new mysqli($host, $user, $pw, $db);

	if ($conn->connect_error) {
	    die("La conexión fallo: " . $conn->connect_error);
	}
?>