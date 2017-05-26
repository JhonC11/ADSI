<?php 
	abstract class VideoJuego {
		protected $nombre;
		public function __construct($nom){
			$this->nombre=$nom;
			
		}
		public abstract function getVideoJuego();


	}

	class Zelda extends VideoJuego{
		
		public function getVideoJuego(){
			return $this->nombre;
		}
	}
	$vj = new Zelda('Ocarine Time');
	echo $vj->getVideoJuego();