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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operaciones</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	

	<div class="container-fluid">
	  	<div class="row">
	  		<div class="col-md-8 col-md-offset-2  text-center">
				<form method="post">
					<div class="form-group">
						<label for="">Seleccione alguna operacion</label>
						<select name="operaciones">
							<option value="">--Seleccione--</option>
							<option value="1">Suma</option>
							<option value="2">Resta</option>
							<option value="3">Multiplicación</option>
							<option value="4">División</option>
						</select>
					</div>
					<div class="form-group">
						<label for="n1">Numero 1</label>
						<input class="form-control" type="number" id="n1">
					</div>
					<div class="form-group">
						<label for="n2">Numero 2</label>
						<input class="form-control" type="number" id="n2" >
					</div>
				</form>
				<input type="submit">
			</div>
		</div>
	</div>

	<h4>
		<?php 
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$op = $_POST['op'];
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];

			if ($op == '1') {
				$op = new Suma($n1 , $n2);
				$op->Calcular();
				print("La suma es igual a: ".$op->getOperacion()."<hr>");
			}
			if ($op == '2') {
				$op = new Resta($n1 , $n2);
				$op->Calcular();
				print("La resta es igual a: ".$op->getOperacion()."<hr>");
			}
			if ($op == '3') {
				$op = new Multiplicación($n1 , $n2);
				$op->Calcular();
				print("La Multiplicacion es igual a: ".$op->getOperacion()."<hr>");
			}
			if ($op == '4') {
				$op = new División($n1 , $n2);
				$op->Calcular();
				print("La Division es igual a: ".$op->getOperacion()."<hr>");
			}
		}
	 ?>
	</h4>

	
	<script src="js/jquery-3.1.1.js"></script> 
	<script src="js/bootstrap.min.js"></script> 
</body>
</html>
