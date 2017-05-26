<?php 
		try {

			$conx = new PDO("mysql:host=$host;dbname=$ndb",$user,$pass);
			$conx->exec('set names utf8');
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	// loguin 

	function login($conx, $correo, $clave){

		try {

			$stm = $conx->prepare("SELECT * FROM usuarios WHERE correo = :correo AND clave = :clave LIMIT 1");
			$stm->bindparam(':correo', $correo);
			$stm->bindparam(':clave', $clave);
			$stm->execute();

			if ($stm->rowCount() > 0){

				$urow = $stm->fetch(PDO::FETCH_ASSOC);
				$_SESSION['uid']       = $urow['id'];
				$_SESSION['unombres'] = $urow['nombres'];
				$_SESSION['urol']     = $urow['rol'];
				return true;
			} else {
				return false;
			}
			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
		
		

	}

	function showArticles($conx){
		try {
			$stm = $conx->prepare("SELECT * FROM articulos");
			$stm->execute();
			return $stm->fetchAll();
		
			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
}
	function saveArticle($conx, $nombre, $precio, $imagen = 'default'){
		try {
			if($imagen == 'default'){
				$sql = "INSERT INTO  articulos VALUES (DEFAULT, :nombre, :precio, DEFAULT)";
				$stm = $conx->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
			}else{
				$sql = "INSERT INTO  articulos VALUES (DEFAULT, :nombre, :precio, :imagen)";
				$stm = $conx->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':imagen', $imagen);

			}
			if($stm->execute()){
				$_SESSION['message_action'] = 'El articulo se adiciono con exito';
				echo "<script>window.location.replace('./');</script>";
			}else{
				echo "<script>window.location.replace('./');</script>";
			}

		
			
		} catch (PDOException $e) {
			echo $e->getMessage();	

		}
	}

	function showArticle($conx, $id){
		try {
			$stm = $conx->prepare("SELECT * FROM articulos WHERE id = :id");
			$stm->bindparam(':id', $id);
			$stm->execute();
			return $stm->fetchAll();
		
			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}

	function updateArticle($conx, $id, $nombre, $precio, $imagen = 'default'){
		try {
			if($imagen == 'default'){
				$sql = "UPDATE  articulos SET nombre = :nombre, precio = :precio WHERE id = :id";
				$stm = $conx->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':id', $id);
			}else{
				$sql = "UPDATE  articulos SET nombre = :nombre, precio = :precio, imagen = :imagen WHERE id = :id";
				$stm = $conx->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':imagen', $imagen);
				$stm->bindparam(':id', $id);

			}
			if($stm->execute()){
				$_SESSION['message_action'] = 'El articulo se modificó con exito';
				echo "<script>window.location.replace('./');</script>";
			}else{
				echo "<script>window.location.replace('./');</script>";
			}

		
			
		} catch (PDOException $e) {
			echo $e->getMessage();	

		}
	}

	function deleteArticle($conx, $id){
		try {
			$stm = $conx->prepare("DELETE FROM articulos WHERE id = :id");
			$stm->bindparam(':id', $id);
			$stm->execute();
			if($stm->execute()){
				$_SESSION['message_action'] = 'El articulo se eliminó con exito';
				echo "<script>window.location.replace('./');</script>";
			}else{
				echo "<script>window.location.replace('./');</script>";
			}
		
			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}