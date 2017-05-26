<?php 
	class Tabla{
		public $nf;
		public $nc;

		public function __construct($nf, $nc){
			$this->nf=$nf;
			$this->nc=$nc;

		}
		public function drawTable(){
			echo "<table border='1'>";
			$this->drawRowStart();
			$this->drawCells();
			$this->drawRowEnd();
			echo "</table>";


		}

		private function drawRowStart(){
			echo "<tr>";
		}
		private function drawCells(){
			echo "<td>".."</td>";
		}
		private function drawRowEnd(){
			echo "</tr>";
		}
	}

	$tb=new Table(8,6);
	$tb->drawTable();