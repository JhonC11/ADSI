<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operaciones</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
	  	<div class="row">
	  		<div class="col-md-8 col-md-offset-2  text-center">
				<form>
					<div class="form-group">
						<label for="">Seleccione alguna operacion</label>
						<select name="operaciones">
							<option value="1">Suma</option>
							<option value="2">Resta</option>
							<option value="3">Multiplicación</option>
							<option value="4">División</option>
						</select>
					</div>
					<div class="form-group">
						<label for="n1">Numero 1</label>
						<input class="form-control" type="number" id="n1">
					</div>
					<div class="form-group">
						<label for="n2">Numero 2</label>
						<input class="form-control" type="number" id="n2" >
					</div>
				</form>
				
			</div>
		</div>
	</div>

	
	<script src="js/jquery-3.1.1.js"></script> 
	<script src="js/bootstrap.min.js"></script> 
</body>
</html>