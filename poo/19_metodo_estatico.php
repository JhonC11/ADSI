<?php 
	class Pc {
		protected $procesador;
		protected $memoriaram;
		protected $discoduro;

		public function __construct($pro,$me,$dd){
			$this->procesador= $pro;
			$this->memoria=$me;
			$this->discoduro=$dd;
		}
		//Esto muestra error.
		public static function getPc(){
			return "Procesador: ".$this->procesador." Memoria RAM: ".$this->memoria." Disco duro: ".$this->discoduro;
		}
		public static function getInfo($pro,$me,$dd){
			return "Procesador: ".$pro." Memoria RAM: ".$me." Disco duro: ".$dd;
		}
	}
	//ERROR FATAL: Los metodos estaticos no pueden reconocer los atributos de la clase
	/*$pc=new Pc('Intel Pentium i7','8 GB', '1 TB');
	$pc->getPc();*/
	echo Pc::getInfo('Intel Core i5','4 GB', '500 GB');