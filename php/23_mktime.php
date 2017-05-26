<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mktime</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend><h1>Calcular dias vividos</h1></legend>
			<input type="text" name="dia" placeholder="Dia">
			<input type="text" name="mes" placeholder="Mes">
			<input type="text" name="ano" placeholder="Año">
			<br>
			<input type="submit" value="Calcular">

		</fieldset>
	</form>
	<hr>

	<?php 
		if($_POST){
			$dia = $_POST['dia'];
			$mes = $_POST['mes'];
			$ano = $_POST['ano'];

			$factual =  mktime(0,0,0,date('m'),date('d'),date('y'));
			$fnacimi = mktime(0,0,0, $mes,$dia,$ano);

			$ftotal = $factual - $fnacimi;
			$ftotal = ( ( ( $ftotal / 60 ) / 60 ) / 24 );

			echo "<h3> El numero de dias vividos: ".$ftotal."</h3>";
		}
	 ?>
</body>
</html>