<?php session_start(); 
		include "include/header.php";
		?>
  		
  		<link rel="stylesheet" href="public/css/bootstrap.min.css"/>  
		<link rel="stylesheet" href="public/css/bootstrap-theme.min.css"/>

	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center"> EDITAR AVATAR </h1>
			<hr>
			<ol class="breadcrumb">
				<li><a href="index.php"> Inicio </a>
				<li class="active"> editar avatar </li>
			</ol>
			<?php if(isset($_GET['id'])): ?>
				<?php
					include 'include/db.php';
					$id   = $_GET['id'];
					$sql  = "SELECT * FROM avatars WHERE id=$id";
					$rs   = mysqli_query($conx, $sql);
					while ($row = mysqli_fetch_array($rs)) {
					
			    ?>
			<form action="" id="add" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input  type="text" 
						    name="name"
							placeholder="Nombre"
							class="form-control" data-validation="required"
							value="<?=$row['name']?>">
				</div>
				<div class="form-group">
					<select name="gender" class="form-control" 
					data-validation="required">
						<option value=""> Genero... </option>
						<option value="Masculino" <?php if($row['gender'] == 'Masculino') 
						echo "selected"; ?>> Masculino </option>
						<option value="Femenino" <?php if($row['gender'] == 'Femenino') 
						echo "selected"; ?>> Femenino </option>
					</select>
				</div>
				<div class="form-group">
					<img id="avatar" src="<?=$row['image']?>">
					<button type="button" class="btn btn-default btn-upload">
					<i class="glyphicon glyphicon-user"></i> 
					Cargar Foto
					</button>
					
					<input style="display:none;" type="file" name="image" id="upload" accept="image/*">
				</div>
				<div class="form-group">
					<input type="color" name="color" class="form-control" data-validation="required" value="<?=$row['color']?>">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success glyphicon glyphicon-pencil"> Modificar </button>
					<button type="reset" class="btn btn-default">
						<i class="glyphicon glyphicon-trash"></i>
						Limpiar
					</button>
					<br>
				</div>

			</form>
			<?php 
			}
				
			mysqli_close($conx);

			?>
			<?php endif ?>

			
			<?php 
				include 'include/db.php';
				if ($_FILES) {

					$path      = $_FILES['image']['name'];
					$extension = pathinfo($path, PATHINFO_EXTENSION);
					$nimage    = time();
					$name      = $_POST['name'];
					$gender    = $_POST['gender'];
					$image    ='public/imgs/avatars/'.$nimage. '.' .$extension;
					$color     = $_POST['color'];
					if(!empty($_FILES['image']['tmp_name'])) {

					move_uploaded_file($_FILES['image']['tmp_name'] , $image);
					$sql = "UPDATE avatars SET name = '$name', gender = '$gender', image = '$image', color = '$color' WHERE id=$id";

				} else {
					$sql = "UPDATE avatars SET name = '$name', gender = '$gender', color = '$color' WHERE id=$id";
				}

					if (mysqli_query($conx , $sql)) {
						$_SESSION['action'] = 'Add';
						echo "<script> window.location.replace('index.php');</script>";
					}
				}
				mysqli_close($conx);
			 ?>
			</div>
		</div>

	</div>

	<script src="public/js/jquery-3.1.1.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/jquery.form-validator.min.js"></script>
	<script src="public/js/jquery.form_validator.es.js"></script>

	<script>
		$(document).ready(function(){
			$('#upload').hide();
			$('.btn-upload').click(function(){
				$('#upload').click();
			});
		
		$.validate({
			form: '#add',
			language: es
		});

		$('#upload').change(function(event){
			previewAvatar();
		});
	});

	/* - - - - - - - - - - -- -  - */

	function previewAvatar() {
		var fr = new FileReader();
		fr.readAsDataURL(document.getElementById("upload").files[0]);
		fr.onload = function (ofREvent) {
			document.getElementById("avatar").src = ofREvent.target.result;
		}
	}
	</script>
	
		

</body>
</html>