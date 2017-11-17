<?php 
	include("connection.php");
	
	$query = "SELECT * FROM materiales";
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