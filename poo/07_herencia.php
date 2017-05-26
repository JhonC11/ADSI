<?php 
	class OperacionAritmetica{
		protected $n1;
		protected $n2;
		protected $rs;

		public function __construct($n1, $n2){
			$this->n1=$n1;
			$this->n2=$n2;
		}

		public function getOperacion(){
			return $this->rs;
		}
	}
	class Suma extends OperacionAritmetica{
		public function Calcular(){
			$this->rs = $this->n1 + $this->n2;
		}
	}
	class Resta extends OperacionAritmetica{
		public function Calcular(){
			$this->rs = $this->n1 - $this->n2;
		}
	}

	class Multiplicacion extends OperacionAritmetica{
		public function Calcular(){
			$this->rs = $this->n1 * $this->n2;
		}
	}
	class Division extends OperacionAritmetica{
		public function Calcular(){
			$this->rs = $this->n1 / $this->n2;
		}
	}
	

	$op = new Suma(5,8);
	$op->Calcular();
	$op->getOperacion();
	print("La suma es igual a: ".$op->getOperacion()."<hr>");

	$op1 = new Resta(5,8);
	$op1->Calcular();
	$op1->getOperacion();
	print("La resta es igual a: ".$op1->getOperacion()."<hr>");

	$op2 = new Multiplicacion(5,8);
	$op2->Calcular();
	$op2->getOperacion();
	print("La Multiplicacion es igual a: ".$op2->getOperacion()."<hr>");

	$op3 = new Division(5,8);
	$op3->Calcular();
	$op3->getOperacion();
	print("La Division es igual a: ".$op3->getOperacion()."<hr>");