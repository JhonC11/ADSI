<?php namespace water;

	class Pokemon{
		private $name ="Squirtle";
		private $pc ="150";
		public static function Tipo(){
			print("<li>Nombre: ".$this->name.". Puntos combate: ".$this->pc."</li><br>");
		}

	}

?>