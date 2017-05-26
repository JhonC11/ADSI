<?php
	abstract class DataBase{
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
			$this->connect();
		}
		public function connect(){
			$this->conx= new mysqli($this->host,$this->user,$this->pass,$this->nmbd);
			if($this->conx){
				/*print("<li>Se ha conectado a la BD con exito !</li>");*/
			}
		}
		public function disconnect(){
			mysqli_close($this->conx);
			/*print("<li>Se ha desconectado de la BD con exito !</li");*/
		}
	}
	

	class Model extends DataBase{
		public function __construct(){
			parent::__construct('localhost','root','','adsi1132816');
			parent::connect();
		}
		public function  getArray(){
			return array('nombre' => 'Jeremias',
			             'apellido' => 'Sanchez',
			             'edad' => 24 );

		}
		public function getUsers(){
			return $this->conx->query("SELECT * FROM usuarios");
		}
		//Consultar
		public function One($id){
			return $this->conx->query("SELECT * FROM usuarios WHERE id= $id");
		}
		//Editar
		public function editUser($id){
			return $this->conx->query("SELECT * FROM usuarios WHERE id = '$id'");
		}
		public function Actualizar($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $id){
			$this->conx->query("UPDATE usuarios SET documento = '$documento', nombres = '$nombres', telefono = '$telefono', direccion = '$direccion', ciudad = '$ciudad', correo = '$correo'  WHERE id = '$id'");
		}
		//Eliminar
		public function delete($id){
			$this->conx->query("DELETE FROM usuarios WHERE id = $id");
		}
		//Añadir
		public function Adicionar($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $clave, $rol){
			$this->conx->query("INSERT INTO usuarios VALUES('', '$documento', '$nombres', '$telefono', '$direccion', '$ciudad', '$correo', '$clave', '$rol')");
		}
	}
		
 ?>