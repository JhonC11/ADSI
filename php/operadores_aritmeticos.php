<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opreadores aritmeticos</title>
	<style>
		body{
			font-family: Arial;
		}
		table{
			border-collapse: collapse;

		}
		table td, table th{
			background-color: #ddd;
			border: 1px solid #ccc;
			padding: 10px;
			color: #666;
		}
		table th{
			background-color: #999;
			color: #fff;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Opreadores aritmeticos</h1>
	<hr>
	<table>
		<tr>
			<th>Operador</th>
			<th>Descripcion</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<?php 
				$x=2;
				$suma= $x + 2;
			 ?>
			<td>+</td>
			<td>Adicion</td>
			<td>X = 2 ; X + 2</td>
			<td><?=$suma?></td>
		</tr>
		<tr>
			<?php 
				$resta= 5 -  $x; 
			 ?>
			<td>-</td>
			<td>Sustraccion</td>
			<td>X = 2 ; 5 - X</td>
			<td><?=$resta?></td>
		</tr>
		<tr>
			<?php 
				$x=4;
				$multiplicacion= $x * 5;
			 ?>
			<td>*</td>
			<td>Producto</td>
			<td>X = 4 ; X * 5</td>
			<td><?=$multiplicacion?></td>
		</tr>
		<tr>
			<?php 
				
				$division= 15/5;
			 ?>
			<td>/</td>
			<td>Division</td>
			<td>15 / 5</td>
			<td><?=$division?></td>
		</tr>
		<tr>
			<?php 
				$residuo= 5%2;
			 ?>
			<td>%</td>
			<td>Residuo</td>
			<td>5%2</td>
			<td><?=$residuo?></td>
		</tr>
		<tr>
			<?php 
				$x= 5;
				$incremento= $x++
			 ?>
			<td>++</td>
			<td>Incremento</td>
			<td>x=5
				x++</td>
			<td>x=<?=$incremento?></td>
		</tr>
		<tr>
			<?php 
				$x = 5;
				$decremento= --$x
			 ?>
			<td>--</td>
			<td>Decremento</td>
			<td>x=5 x--</td>
			<td>x=<?=$decremento?></td>
		</tr>
	</table>

</body>
</html>