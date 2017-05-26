<?php 
	class Mostrar{
		public function muestre($nom, $e){
			print("<li>".$nom." y tambien ".$e."</li>");
		}
	}
	class Holi{
		private $nombre;
		private $edad;
		private $colaboracion;

		public function __construct($nom, $e){
			$this->nombre =$nom;
			$this->edad= $e;
			//Colaboracion de eobjetos
			$this->colaboracion = new Mostrar();

		}

		public function mostrarEsto(){
			
			$this->colaboracion->muestre($this->nombre, $this->edad);

		}

	}
	$hol1 = new Holi('Jhon', 'no se');
	$hol1->mostrarEsto();

	$hol2 = new Holi('nose', 'Cortes');
	$hol2->mostrarEsto();