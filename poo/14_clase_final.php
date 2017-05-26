<?php 
	final class Fruta{
		protected $clima;
		protected $color;

		public function __construct($clima, $color){
			$this->clima=$clima;
			$this->color=$color;
		}
		public final function getInformacion(){
			
			return $this->clima . $this->color;
		}
	}

	class chirimoya extends Fruta{
		public function getInformacion(){
			parent::getInformacion();
		}
	}
	$fr =new chirimoya('Templado','Verde');