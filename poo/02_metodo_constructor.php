<?php 
	class Catalogo{
		public $artista;
		public $album;
		public $genero;
		public $ano;


		public function __construct($art,$alb,$gen,$ano){
			$this->artista=$art;
			$this->album=$alb;
			$this->genero=$gen;
			$this->ano=$ano;

		}
		public function setCatalogo(){

		}
		
		public function getCatalogo(){
			print("<ul>");
			print("<li>Artista: ".$this->artista."</li>");
			print("<li>Album: ".$this->album."</li>");
			print("<li>Genero: ".$this->genero."</li>");
			print("<li>Año: ".$this->ano."</li>");
			print("</ul>");
		}
	}
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat = new Catalogo('Nirvana','Never Mind','Grunge',1991);
	$cat2 = new Catalogo('Whatever','er Mind','Grunge',1991);
	$cat->getCatalogo();