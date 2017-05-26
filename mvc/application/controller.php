<?php 
	class Controller{
		public $load;
		public $model;

		public function __construct(){
			$this->load = new Load();
			$this->model = new Model();


			if($_GET){
				if($_GET['q']=='select'){
					$this->showUsers();
				}
				//Consultar
				if($_GET['q']=='one'){
					$this->Consult($_GET['id']);
				}
				//Editar
				if($_GET['q'] == 'edit'){
					$id = $_GET['id'];
					$this->editUsers($id);
				}
				//ELiminar
				if($_GET['q'] == 'delete' ){
					$id = $_GET['id'];
					$this->deleteU($id);
				}
				//Adicionar
				if($_GET['q']=='add'){
					$this->add();
				}
				
				

			}else{
				$this->welcome();
			}


		}
		public function welcome(){
			$dataArray = $this->model->getArray();
			$this->load->view('welcome.php', $dataArray);
		}

		public function showUsers(){
			$dataUsers = $this->model->getUsers();
			$this->load->view('list.php', $dataUsers);


		}
		//Consultar
		public function Consult($id){
			$consulta = $this->model->One($id);
			$this->load->view('show.php', $consulta);
		}
		//Editar
		public function editUsers($id){
			
			if($_POST){
					$id = $_POST['id'];
					$documento = $_POST['documento'];
					$nombres = $_POST['nombres'];
					$telefono = $_POST['telefono'];
					$direccion = $_POST['direccion'];
					$ciudad = $_POST['ciudad'];
					$correo = $_POST['correo'];
					$this->ActUsers($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $id);

				}
				else{
					$dataUsers = $this->model->editUser($id);
					$this->load->view('edit.php', $dataUsers);
				}
		}
		public function ActUsers($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $id){
			$this->model->Actualizar($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $id);
			 $this->showUsers();
		}
		//Eliminar
		public function deleteU($id){
			$dataUsers = $this->model->delete($id);
			$this->showUsers();
		}
		//Añadir 
		public function add(){
			if($_POST){
					$documento = $_POST['documento'];
					$nombres = $_POST['nombres'];
					$telefono = $_POST['telefono'];
					$direccion = $_POST['direccion'];
					$ciudad = $_POST['ciudad'];
					$correo = $_POST['correo'];					
					$clave = $_POST['clave'];					
					$rol = $_POST['rol'];					
					$this->model->Adicionar($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $clave, $rol);
			 		$this->showUsers();

				}
			else{
					$this->load->view('add.php');
				}
		}
		

	}
 ?>