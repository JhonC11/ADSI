<?php 
	require "config/app.php";
	require "config/database.php";
	require "config/redirect.php";
	include "templates/header.inc";
 ?>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-8 col-md-offset-2">
  			<h1>Welcome</h1>
  			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">Ingreso de usuarios</h3>
			  </div>
			  <div class="panel-body">
			  	<div class="row">
				  	<div class="col-md-8 col-md-offset-2">
			  			<?php 
			  				if ($_SERVER['REQUEST_METHOD']=='POST') {
			  					$correo = $_POST['correo'];
			  					$clave = md5($_POST['clave']);

			  					if (login($conx, $correo, $clave)){
									if ($_SESSION['urol']== 'administrador') {
										echo "<script>window.location.replace('administrador.php');</script>";
										  						
			  						}else if ($_SESSION['urol']== 'cliente') {
										echo "<script>window.location.replace('cliente.php');</script>";
										  						
			  						}
			  				}else{
			  					echo '<div class="alert alert-danger">
									    <div class="container-fluid">
										  <div class="alert-icon">
										    <i class="material-icons">error_outline</i>
										  </div>
										  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true"><i class="material-icons">clear</i></span>
										  </button>
									      <b>Error Alert:</b> Damn man! You screwed up the server this time. You should find a good excuse for your Boss...
									    </div>
									</div>';
			  				}
			  			}
			  			?>
				    	<form method="post">
				    		<div class="form-group">
				    			<input type="text" class="form-control" name="correo" placeholder="Correo electronico">
				    		</div>
				    		<div class="form-group">
				    			<input type="password" class="form-control" name="clave" placeholder="Contraseña">
				    		</div>
				    		<div class="form-group">
				    			<input type="submit" class="btn btn-primary" value="Ingresar">
				    		</div>
				    	</form>
			    	</div>
			    </div>
			  </div>
			</div>
  		</div>
  	</div>
  </div>
 <?php 
	include "templates/footer.inc";
  ?>