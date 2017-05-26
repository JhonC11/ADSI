<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo (do while)</title>
</head>
<body>
	<h1>Ciclo (do while)</h1>
	<hr>
	
	<?php 
		$e=3;
		do{
			echo "El numero es: ". $e . "<br>";
			($e+=3);

		}
		while($e<100);
	 ?>
</body>
</html>