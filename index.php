<?php session_start(); if(isset($_SESSION['user'])){ header("Location: home.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<title>Materiales</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body class="bg-inverse">
	<div class="container my-5">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 col-lg-4 offset-lg-4">
				<div class="card">
				<div class="card-header">
					<h2 class="text-center">Iniciar sesión</h2>
				</div>
				<div class="card-block">							
						<form action="php/login.php" method="POST">
							<input class="form-control mb-3" type="text" name="user" placeholder="Usuario">
							<input class="form-control mb-3" type="password" name="pass" placeholder="Contraseña">
							<button class="btn btn-primary float-right" type="submit">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>		
</body>
</html>