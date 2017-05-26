<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center">Listar Usuario desde BD</h1>
			<hr>
			<h3 class="load">Datos de Usuario (BD)</h3>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Documento</th>
						<th>Nombres</th>
						<th>Telefono</th>
						<th>Direccion</th>
						<th>Ciudad</th>
						<th>Correo</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $d): ?>
						<tr>
							<td><?php echo $d['documento']; ?></td>
							<td><?php echo $d['nombres']; ?></td>
							<td><?php echo $d['telefono']; ?></td>
							<td><?php echo $d['direccion']; ?></td>
							<td><?php echo $d['ciudad']; ?></td>
							<td><?php echo $d['correo']; ?></td>
							<td>
								<a href="?q=edit&id=<?php echo $d['id']; ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
								<a href="?q=delete&id=<?php echo $d['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<a href="./" class="btn btn-info">Regresar</a>
			
		</div>
	</div>
</div>
</body>
</html>