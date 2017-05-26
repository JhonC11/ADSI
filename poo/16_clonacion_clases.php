<?php 
	class Materia {
		private $nombre;
		private $profesor;
		private $aula;

		public function __construct($nom, $pro, $aul){
			$this->nombre= $nom;
			$this->profesor= $pro;
			$this->aula=$aul;
		}

		public function getMateria(){
			print("<li>Nombre: ".$this->nombre."</li>");
		}

		public function __clone(){

		}
	}
	$mat = new Materia('Ingles','Yuno Garmendia', 'Sistemas 1');
	$ob=clone($mat);
	$ob->getMateria();
