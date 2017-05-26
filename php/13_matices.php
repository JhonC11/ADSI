<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matrices</title>
</head>
<body>
	<h1>Matrices</h1>
	<hr>



	<?php 
		//Numericos
		//Forma larga(Incorrecta)
		echo "<h2>Vehiculos</h2>";

		$vh1 = "Volkswagen";
		$vh2 = "Renault";
		$vh3 = "Chevrolet";
		$vh4 = "Mazda";
		$vh5 = "Ford";

		//Forna corta(correcta) - Indice automatico
		$vehiculos = array ('Volkswagen', 'Renault', 'Chevrolet', 'Mazda', 'Ford');

		//Indices manuales
		$vehiculos[5] = 'kia';
		$vehiculos[6] = 'Fiat';
		$vehiculos[7] = 'Toyota';
		$vehiculos[8] = 'Hyundai';

		echo var_dump($vehiculos);



		// Asociativos 
		echo "<h2>Referencias</h2>";
		$referencias =array('Volkswagen'=> 'Golf', 'Renault'=> 'Duster', 'Chevrolet'=>'Traker','Mazda'=>'Allegro', 'Ford'=>'Fiesta');

		$refencias['kia']= 'Picanto'; 
		$refencias['Fiat']= 'Palio'; 
		$refencias['Toyota']= 'Prado'; 
		$refencias['Hyundai']= 'i30'; 

		echo var_dump($referencias);

		//Mia
		echo "<h2>Equipos</h2>";
		$equipos = array("Liga Colombiana"=> array("Once Caldas", "Atletico Nacional", "Millonarios"), "Liga italina"=> array("Juventus", "Napoli", "Lazio"));
		echo var_dump($equipos);
		echo "Mi liga equipo preferido es ".$equipos['Liga Colombiana'][0];



	 ?>
	
</body>
</html>