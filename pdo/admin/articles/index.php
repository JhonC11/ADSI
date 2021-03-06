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
			<h4 class="text-uppercase">Modulo de Artículos</h4>
			<hr>
			<a href="add.php" class="btn btn-success">
				<i class="material-icons">add</i>
				Adicionar Articulo
			</a>
			<br>
			<?php if (isset($_SESSION['message_action'])): ?>
				<div class="alert alert-success">
				    <div class="container-fluid">
					  <div class="alert-icon">
						<i class="material-icons">check</i>
					  </div>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"><i class="material-icons">clear</i></span>
					  </button>
				      <b>Aviso:</b> <?=$_SESSION['message_action']; ?>
				    </div>
				</div>
			<?php unset($_SESSION['message_action']); ?>
			<?php endif ?>
			
			<table class="table">
				<thead>
					<th>ID</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					<?php $arts = showArticles($conx); ?>
					<?php foreach ($arts as $art): ?>
						<tr>
							<td> <?=$art['id']?></td>
							<td> <?=$art['nombre']?></td>
							<td>$ <?=number_format($art['precio'])?></td>
							<td>
								<a href="show.php?id=<?=$art['id']?>" class="btn btn-primary btn-default btn-xs" rel="tooltip" title="Consultar">
									<i class="material-icons">search</i>
								</a>
								<a href="edit.php?id=<?=$art['id']?>" class="btn btn-primary btn-default btn-xs" rel="tooltip" title="Modificar">
									<i class="material-icons">build</i>
								</a>
								<a href="javascript:;" class="btn btn-danger  btn-delete btn-default btn-xs" rel="tooltip" title="Eliminar" data-delete="<?=$art['id']?>">
									<i class="material-icons">delete_forever</i>
								</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
 <?php 
	include "../../templates/footer.inc";
  ?>