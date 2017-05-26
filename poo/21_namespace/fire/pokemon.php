<?php namespace fire;

	class Pokemon{
		private $name ="Charmander";
		private $pc ="200";
		public static function Tipo(){
			print("<li>Nombre: ".$this->name.". Puntos combate: ".$this->pc."</li><br>");
		}

	}

?>