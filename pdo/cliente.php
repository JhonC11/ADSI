<?php 
	require "config/app.php";
	require "config/database.php";
	require "config/security_client.php";
	include "templates/header.inc";
	include "templates/navbar.inc";
 ?>
<div class="container-fluid dashboard">
	<div class="col-md-10 col-md-offset-1  text-center">
		<div class="row">
			<h1>Bienvenido: <?=$_SESSION['unombres']?></h1>
			<hr>
			  <?php $arts = showArticles($conx); ?>
			  <?php foreach ($arts as $art): ?>
			  	<div class="col-md-3">
				    <div class="thumbnail text-center">
				      <figure style="
						background-image: url(<?=$base_url.$art['imagen']?>);
						background-position: center;
						background-repeat: no-repeat;
						background-size: contain;
						width: 100%;
						height: 180px;">
				      	
				      </figure>
				      <div class="caption">
				        <h3><?=$art['nombre']?></h3>
				        <h3>$<?=number_format($art['precio'])?></h3>
				        <p>
					        <a href="#" class="btn btn-primary">
					        	<i class="material-icons">shopping_cart</i>
					        </a> 
				        </p>
				      </div>
				    </div>
				</div>
			  <?php endforeach ?>
		</div>
	</div>
</div>
 <?php 
	include "templates/footer.inc";
  ?>