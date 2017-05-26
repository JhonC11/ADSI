<?php 
	class Vehiculo{
		private $tipo;
		private $marca;
		private $referencia;

		public function __construct($marca, $referencia, $tipo = 'Sedan'){
			$this->tipo=$tipo;
			$this->marca=$marca;
			$this->referencia=$referencia;
		}

		public function getVehiculo(){
			print("Tipo: ".$this->tipo."<br>");
			print("Marca: ".$this->marca."<br>");
			print("Referencia: ".$this->referencia->getReferencia()."<hr>");
		}
	}

	class Volkswagen {
		private $referencia;
		public function __construct($ref){
			$this->referencia=$ref;
		}
		public function getReferencia(){
			if($this->referencia==1) return 'Gol';
			if($this->referencia==2) return 'Jetta';
			if($this->referencia==3) return 'Golf';
		}
	}

	$volks1 = new Volkswagen(1);
	$volks1 = new Vehiculo('Volkswagen', $volks1, 'Coupé/Sedan');
	$volks1->getVehiculo();

	$volks2 = new Volkswagen(2);
	$volks2 = new Vehiculo('Volkswagen', $volks2, 'Coupé');
	$volks2->getVehiculo();

	$volks3 = new Volkswagen(3);
	$volks3 = new Vehiculo('Volkswagen', $volks3);
	$volks3->getVehiculo();