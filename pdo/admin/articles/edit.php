<?php 
	require "../../config/app.php";
	require "../../config/database.php";
	require "../../config/security_admin.php";
	include "../../templates/header.inc";
	include "../../templates/navbar.inc";
 ?>
<div class="container-fluid dashboard">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<ol class="breadcrumb">
                <li><a href="../../">Menu principal</a></li>
                <li><a href="index.php">Inicio</a></li>
                <li class="active">Modificar articulo</li>
            </ol>

			<h4 class="text-uppercase  text-center">Modificar Artículo</h4>
			<hr>
			<?php if ($_GET): ?>
			<?php 
				$id = $_GET['id'];
				$art = showArticle($conx, $id);
				
			 ?>
			 <?php foreach ($art as $a): ?>
			 	<form method="post" enctype="multipart/form-data" id="frm" class=" text-center">
					<div class="form-group">
						<input type="hidden" name="id" value="<?=$a['id']?>">
						<input type="text" class="form-control" name="nombre" placeholder="Nombre"   value="<?=$a['nombre']?>" data-validation="required">
					</div>		
					<div class="form-group">
						<input type="number" class="form-control" name="precio" placeholder="Precio"  value="<?=$a['precio']?>"  data-validation="required">
					</div>
					<div class="form-group">
						<input type="file" id="upload" class="hide" name="imagen" accept="image/*"  data-validation="required">
						<button class="btn btn-primary btn-upload" type="button">
							<i class="material-icons">photo</i> Subir imagen
						</button>
					</div>		
					<div class="form-group">
						<button class="btn btn-success" type="submit">
							<i class="material-icons">send</i> Adicionar
						</button>
						<button class="btn btn-default" type="reset">
							<i class="material-icons">settings_backup_restore</i> Limpiar
						</button>
					</div>
				</form>
			 <?php endforeach ?>
			 <?php else: ?>
				<script>alert('No se puede realizar la consulta.');</script>
			<?php endif ?>


			


			<?php 
				if($_FILES){
					$id = $_POST['id'];
					$nombre = $_POST['nombre'];
					$precio = $_POST['precio'];
					$imagen = 'public/imgs/articles/'.$_FILES['imagen']['name'];
					if(!empty($_FILES['imagen']['name'])) {
                        move_uploaded_file($_FILES['imagen']['tmp_name'] , '../../'.$imagen);
						updateArticle($conx, $id, $nombre, $precio, $imagen);
                        
                    } else {
						updateArticle($conx, $id, $nombre, $precio);
                        
                    }


				}
			 ?>
		</div>
	</div>
</div>
 <?php 
	include "../../templates/footer.inc";
  ?>