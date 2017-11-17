<?php include "php/seguridad.php"; ?>
<?php if($_SESSION['type'] != 'administrador'){ header('Location: home.php'); } ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nuevo material</title>
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
							<li class="list-inline-item"><a href="home.php">Lista de materiales</a></li>
							<li class="list-inline-item">|</li>
							<li class="list-inline-item"><a href="php/logout.php">Cerrar sesión</a>	</li>
						</ul>
					</div>
				</div>				
			</div>

			<div class="col-lg-7">
				<form action="php/save.php" method="POST" class="px-3">
					<div class="form-group row">
					<label class="col-sm-4">Nombre</label>
					<input class="form-control col-sm-8" type="text" name="nombre">
				</div>

					<div class="form-group row">
					<label class="col-sm-4" for="modulo_elastico">Módulo elástico</label>
					<input class="form-control col-sm-8" type="text" name="modulo_elastico">
				</div>

					<div class="form-group row">
					<label class="col-sm-4">Coeficiente de Poisson</label>
					<input class="form-control col-sm-8" type="text" name="coeficiente_poisson">
				</div>

					<div class="form-group row">
					<label class="col-sm-4">Densidad de masa</label>
					<input class="form-control col-sm-8" type="text" name="densidad_masa">
				</div>

					<div class="form-group row">
					<label class="col-sm-4">Límite de tracción</label>
					<input class="form-control col-sm-8" type="text" name="limite_traccion">
				</div>

					<div class="form-group row">
					<label class="col-sm-4">Límite de compresión</label>
					<input class="form-control col-sm-8" type="text" name="limite_elastico">
				</div>

					<div class="form-group row">
					<label class="col-sm-4">Módulo tangente</label>
					<input class="form-control col-sm-8" type="text" name="modulo_tangente">
				</div>

					<div class="form-group row">
					<label class="col-sm-4">Coeficiente de expansión térmica</label>
					<input class="form-control col-sm-8" type="text" name="coeficiente_expansion_termica">
				</div>

					<div class="form-group row">
					<label class="col-sm-4">Factor de endurecimiento</label>
					<input class="form-control col-sm-8" type="text" name="factor_endurecimiento">
				</div>

					<button class="btn btn-primary" type="submit">Guardar</button>
				</form>
			</div>

		</div>
	</div>

</body>
</html>