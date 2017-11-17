<?php 
	include("connection.php");

	#$columna = $_POST['columna'];
	$valor = $_POST['valor'];

	if( $valor == ''){
		$query = "SELECT * FROM materiales";
	}else{
		$query = "SELECT * FROM materiales WHERE nombre LIKE '%$valor%' 
					OR modulo_elastico LIKE '%$valor%' 
					OR coeficiente_poisson LIKE '%$valor%' 
					OR densidad_masa LIKE '%$valor%'
					OR limite_traccion LIKE '%$valor%'
					OR limite_elastico LIKE '%$valor%'
					OR modulo_tangente LIKE '%$valor%'
					OR coeficiente_expansion_termica LIKE '%$valor%'
					OR factor_endurecimiento LIKE '%$valor%'
					OR categoria LIKE '%$valor%' ";
	}
	$result = $conn->query($query);
	
	while($row = $result->fetch_assoc()){
		echo "<tr class='element'>";
		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['modulo_elastico']."</td>";
		echo "<td>".$row['coeficiente_poisson']."</td>";
		echo "<td>".$row['densidad_masa']."</td>";
		echo "<td>".$row['limite_traccion']."</td>";
		echo "<td>".$row['limite_elastico']."</td>";
		echo "<td>".$row['modulo_tangente']."</td>";
		echo "<td>".$row['coeficiente_expansion_termica']."</td>";
		echo "<td>".$row['factor_endurecimiento']."</td>";
		echo "<td>".$row['categoria']."</td>";
		echo "</tr>";
	}

	$conn->close();
 ?>