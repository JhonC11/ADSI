<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros</title>
</head>
<body>
	<h1>Filtros</h1>
	<hr>
	<!-- validar numero -->
	
	<form method="post">
		<fieldset>
			<legend><h4>Numero entero</h4></legend>
			<input type="text" name="numero" placeholder="Ingrese un numero">
			<input type="submit" name="btn1" value="Filtrar">
		</fieldset>
	</form>
	<!-- validar numero -->

	<form method="post">
		<fieldset>
			<legend><h4>Numero entero(Opciones)</h4></legend>
			<input type="text" name="numero" placeholder="Ingrese un numero">
			<input type="submit" name="btn2" value="Filtrar">
		</fieldset>
	</form>
	<!-- validar correo -->
	<form method="post">
		<fieldset>
			<legend><h4>Email</h4></legend>
			<input type="text" name="correo" placeholder="Ingrese un correo electronico">
			<input type="submit" name="btn3" value="Filtrar">
		</fieldset>
	</form>
	<!-- validar correo -->
	<form method="post">
		<fieldset>
			<legend><h4>Desinfectar</h4></legend>
			<input type="text" name="url" placeholder="Ingrese su URL">
			<input type="submit" name="btn4" value="Filtrar">
		</fieldset>
	</form>
	
	<?php 
		if ($_POST) {
			//Numero entero
			if (isset($_POST['btn1'])) {
				$numero = $_POST['numero'];
				if (!filter_var($numero, FILTER_VALIDATE_INT)) {
					echo "<li>No es un numero entero!</li>";
				}else{
					echo "<li>Si es un numero entero!</li>";

				}
			}
		
			//Numero entero
			if (isset($_POST['btn2'])) {
				$numero = $_POST['numero'];

				$opt = array('options'=>array('min_range'=>0, 'max_range'=> 255));

				if (!filter_var($numero, FILTER_VALIDATE_INT, $opt)) {
					echo "<li>El numero es incorrecto!</li>";
				}else{
					echo "<li>El numero es correcto!</li>";

				}
			}
			//Correo
			if (isset($_POST['btn3'])) {

				if (!filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL)) {
					echo "<li>El email es invalido!</li>";
				}else{
					echo "<li>El email es valido!</li>";

				}
			}
			//Desinfectar
			if (isset($_POST['btn4'])) {

				$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
				echo $url;
			}
		}


 	?>
</body>
</html>