<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Usuarios (Modelo Vista Controlador)</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center">Editar (MVC)</h1>
			<hr>
			<h3 class="lead">Editar Usuario (Arreglo)</h3>
			<form action="" method="post">
			<?php foreach ($data as $d): ?>
				
				<div class="form-group">
					<input type="hidden" name="id" value="<?=$d['id']?>">
					<input type="number" class="form-control" name="documento" placeholder="Documento" data-validation="required" value="<?=$d['documento']?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="nombres" placeholder="Nombres" data-validation="required" value="<?=$d['nombres']?>">
				</div>
				<div class="form-group">
					<input type="number" class="form-control" name="telefono" placeholder="Telefono" data-validation="required" value="<?=$d['telefono']?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="direccion" placeholder="Direccion" data-validation="required" value="<?=$d['direccion']?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="ciudad" placeholder="Ciudad" data-validation="required" value="<?=$d['ciudad']?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="correo" placeholder="Correo" data-validation="required" value="<?=$d['correo']?>">
				</div>
				<div class="form-group">
					<a href="./" class="btn btn-info">Regresar</a>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i>Editar</button> 
				</div>
		</form>
			<?php endforeach ?>
		</div>
	</div>
</div>

</body>
</html>