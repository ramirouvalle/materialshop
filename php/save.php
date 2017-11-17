<?php 
	$nombre = $_POST['nombre'];
	$modulo_elastico = $_POST['modulo_elastico'];
	$coeficiente_poisson = $_POST['coeficiente_poisson'];
	$densidad_masa = $_POST['densidad_masa'];
	$limite_traccion = $_POST['limite_traccion'];
	$limite_elastico = $_POST['limite_elastico'];
	$modulo_tangente = $_POST['modulo_tangente'];
	$coeficiente_expansion_termica = $_POST['coeficiente_expansion_termica'];
	$factor_endurecimiento = $_POST['factor_endurecimiento'];

	include('connection.php');
	$query = 'INSERT INTO materiales (nombre, modulo_elastico, coeficiente_poisson, densidad_masa, limite_traccion, limite_elastico, modulo_tangente, coeficiente_expansion_termica, factor_endurecimiento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
	
	if($stmt = $conn->prepare($query)){
		$stmt->bind_param("sssssssss", $nombre, $modulo_elastico, $coeficiente_poisson, $densidad_masa, $limite_traccion, $limite_elastico, $modulo_tangente, $coeficiente_expansion_termica, $factor_endurecimiento);
		
		$stmt->execute();	

		header("Location: ../home.php");
	}

	$conn->close();
?>