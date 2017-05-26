<?php 
	require "config/app.php";
	require "config/database.php";
	require "config/security_admin.php";
	include "templates/header.inc";
	include "templates/navbar.inc";
 ?>
<div class="container-fluid dashboard">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
			<h1>Bienvenido: <?=$_SESSION['unombres']?></h1>
			<hr>
			<div class="row">
				<ul class="nav nav-pills nav-pills-primary col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
					<li class="active">
						<a href="admin/articles/">
							<i class="material-icons">card_giftcard</i>
							Articulos
						</a>
					</li>
					<li class="active">
						<a href="admin/customers/">
							<i class="material-icons">supervisor_account</i>
							Clientes
						</a>
					</li>
					<li class="active">
						<a href="admin/sales/">
							<i class="material-icons">shopping_cart</i>
							Compras
						</a>
					</li>
				</ul>
			</div>

			
		</div>
	</div>
</div>
 <?php 
	include "templates/footer.inc";
  ?>