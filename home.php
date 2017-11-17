<?php include 'php/seguridad.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio - Materiales</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container my-3">
		<div class="row">

			<div class="col-12">
				<div class="jumbotron">
					<div class="container">
						<h1 class="display-4">Bienvenido <small><?php echo $_SESSION['user']; ?></small></h1>
						<ul class="list-inline">
							<?php if($_SESSION['type'] == 'administrador'){ 
								echo "<li class='list-inline-item'><a href='new.php'>Agregar Nuevo Material</a></li><li class='list-inline-item'>|</li>";
							} ?>							
							<li class="list-inline-item"><a href="php/logout.php">Cerrar sesión</a>	</li>
						</ul>
					</div>
				</div>				
			</div>

			<div class="col-md-8 my-2">
				<form class="form-inline">
					<label class=" m-1">Buscar:</label>
					<input class="form-control m-1 search" type="text" name="buscador" id="buscador" onkeyup="filtrar()" placeholder="Inicie busqueda">					
				</form>
			</div>

			<div class="col-md-4 my-2">
				<?php if($_SESSION['type'] == 'administrador'){ echo "<a href='new.php' class='btn btn-success float-right'>Agregar Nuevo Material</a>"; } ?>
			</div>

			<div class="col-12">
				<div class="table-responsive">
					<table class="table m-0">
						<thead class="table-inverse">
							<tr>
								<th>Nombre</th>
								<th>Módulo elástico</th>
								<th>Coeficiente de poisson</th>
								<th>Densidad de masa</th>
								<th>Límite de tracción</th>
								<th>Límite de compresión</th>
								<th>Módulo tangente</th>
								<th>Coeficiente de expansión térmica</th>
								<th>Factor de endurecimiento</th>
								<th>Categoría</th>
							</tr>
						</thead>
						<tbody class="elements" id="materiales">								
							<?php include("php/materiales.php"); ?>
						</tbody>
					</table>
				</div>
			</div>				
			
		</div>
	</div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	function filtrar() {
		var buscador = document.getElementById("buscador");
		if (buscador) {
			console.log(buscador.value);

			$.post("php/filtrar.php", {
				valor: buscador.value
			}, function(data){
				$('#materiales').children().empty();
				$('#materiales').append(data);
			})
		}
	}
</script>
</html>