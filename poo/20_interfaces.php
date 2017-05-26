<?php 
	interface iPhoto{
		public function setPhoto($nombre,$width, $height);
		public function getPhoto();
	}

	class photo implements iPhoto{

		private $nombre;
		private $width;
		private $height;


		public function setPhoto($nombre,$width, $height){
			$this->nombre =  $nombre;
			$this->width =  $width;
			$this->height =  $height;
		}
		public function getPhoto(){
			return "Nombre: ".$this->nombre.". Ancho: ".$this->width.". Alto: ".$this->height;
		}
	}

	$pt = new photo();
	$pt->setPhoto('Paisaje.png','1024px','800px');
	echo $pt->getPhoto();