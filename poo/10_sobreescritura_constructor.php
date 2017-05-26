<?php 
	class Consola{
		protected $modelo;
		protected $nombre;
		protected $almacenamiento;

		public function __construct($mod,$nom,$alm){
			$this->modelo=$mod;
			$this->nombre=$nom;
			$this->almacenamiento=$alm;
		}

		public function getConsola(){
			print("<li><strong>Referencia: </strong>".$this->referencia."</li><hr>");

		}

	}
	class Nintendo extends getConsola{
		public function getConsola(){
			print("<li><strong>Marca: </strong>".$this->marca."</li>");
			parent::__construct();
		}
	}
	$con = new Consola('Mini', 'Couper S');
	$con->getVehiculo();