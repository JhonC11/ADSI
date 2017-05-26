<?php namespace electric;

	class Pokemon{
		private $name ="Pikachu";
		private $pc ="230";
		public static function Tipo(){
			print("<li>Nombre: ".$this->name.". Puntos combate: ".$this->pc."</li><br>");
		}

	}

?>