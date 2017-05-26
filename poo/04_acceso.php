<?php 
	class ejemploAcceso{
		public $documento;
		private $nombre;
		private $edad;

		public function __construct($doc,$nom,$edad){
			$this->documento =$doc;
			$this->nombre    =$nom;
			$this->edad      =$edad;

		}

		public function getAcceso(){
			
			print("Documento: ".$this->getDocumento()."<br>");
			print("Nombre: ".$this->getNombre()."<br>");
			print("Edad: ".$this->getEdad()." Años<br>");
			
		}

		private function getDocumento(){
			return $this->documento;
		}
		private function getNombre(){
			return $this->nombre;
			
		}
		private function getEdad(){
			return $this->edad;
		
			
		}
	}

	$acc = new ejemploAcceso(1053855520, 'Jhon Cortes', 20);
	$acc->getAcceso();

