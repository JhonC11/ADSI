<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir archivos (php)</title>
</head>
<body>
	<h1>Subir archivos (php)</h1>
	<hr>
	<form action="subir.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>
			<label ><h2>Foto</h2></label>
			<input type="file" name="foto" accept="image/*">
			<br>
			<input type="submit" value="Subir foto">
			</legend>
		</fieldset>
	</form>
	<?php 
		if($_POST){

			if($_FILES['foto']['error']>0){
				echo $_FILES['foto']['error'];
			}else{
				echo "<li>Nombre: ".$_FILES['foto']['name']."</li>";
				echo "<li>Tipo: ".$_FILES['foto']['type']."</li>";
				echo "<li>Tamaño: ".$_FILES['foto']['size'] / 1024 ." kb"."</li>";
				echo "<li>Almacenado temporal: ".$_FILES['foto']['top_name']."</li>";
			}
		}
	 ?>
</body>
</html>