<?php
	session_start();
	
	$form_user = $_POST['user'];
	$form_password = $_POST['pass'];

	include("connection.php");

	$query = "SELECT * FROM usuarios WHERE usuario = '$form_user' AND clave = '$form_password'";
	$result = $conn->query($query);
	
	if($row = $result->fetch_assoc()){
		$_SESSION['user'] = $row['usuario'];
		$_SESSION['auth'] = true;
		$_SESSION['type'] = $row['tipo_usuario'];
		echo "done";
		header("Location: ../home.php");
	}else{
		echo "Usuario o contraseña incorrecta";
	}
	
	$conn->close();
?>