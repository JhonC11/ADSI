<?php 
	class Vehiculo{
		protected $marca;
		protected $referencia;

		public function __construct($mar,$ref){
			$this->marca=$mar;
			$this->referencia=$ref;
		}

		public function getVehiculo(){
			print("<li><strong>Referencia: </strong>".$this->referencia."</li><hr>");

		}

	}
	class Mini extends Vehiculo{
		public function getVehiculo(){
			print("<li><strong>Marca: </strong>".$this->marca."</li>");
			parent::getVehiculo();
		}
	}
	$vh = new Mini('Mini', 'Couper S');
	$vh->getVehiculo();

	$vh1 = new Mini('Mini', 'ChilliPepper');
	$vh1->getVehiculo();