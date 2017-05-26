<?php 
	abstract class BaseDatos{
		protected $conx;
		protected $host;
		protected $user;
		protected $pass;
		protected $nmbd;

		public function __construct($h,$u,$p,$n){
			$this->host=$h;
			$this->user=$u;
			$this->pass=$p;
			$this->nmbd=$n;
		}
		public function conexion(){
			$this->conx= new mysqli($this->host,$this->user,$this->pass,$this->nmbd);
			if($this->conx){
				/*print("<li>Se ha conectado a la BD con exito !</li>");*/
			}
		}
		public function desconexion(){
			mysqli_close($this->conx);
			/*print("<li>Se ha desconectado de la BD con exito !</li");*/
		}
	}
	//Clase concreta

	class Usuario extends BaseDatos{
		public function __construct($h,$u,$p,$n){
			parent::__construct($h,$u,$p,$n);
			parent::conexion();
		}
		public function getUsuario(){
			return $this->conx->query('SELECT * FROM usuarios');
			// $var = mysqli_query($this)
		}
	}


	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<h1>Usuarios</h1>
		<ul>
			<?php 

				$user = new Usuario('localhost','root','','adsi1132816');
				$usuarios = $user->getUsuario();
			 ?>
			 <?php foreach ($usuarios as $usuario): ?>
			 	<li><?php print( $usuario['nombres']); ?></li>
			 <?php endforeach ?>
			 <?php 
			 	$user->desconexion();
			  ?>
		</ul>
	</body>
	</html>