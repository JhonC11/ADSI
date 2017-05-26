<?php 
	
	class Jugador {
		//Atributos
		public $nombre;
		public $posicion;

		//Metodos 
		public function iniclass($nom, $pos){
			$this->nombre=$nom;
			$this->posicion=$pos;

		}
		public function mostrarJugador(/*$nombre, $posicion*/){
			return 	"<li>Nombre:".$this->nombre." </li><li>Posicion: ".$this->posicion." </li>";
		}
	}
	// Creas Objeto
	$ju= new Jugador;
	$ju->iniclass('Cristiano Ronaldo','Delantero');
	//Acceso a un atributo (publico)
	echo $ju->nombre;
	//Acceso a un metodo
	echo "<ul>".$ju->mostrarJugador()."</ul>";


	print($ju->mostrarJugador());