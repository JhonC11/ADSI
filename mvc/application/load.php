<?php 
	class Load{
		public function view($view_name, $data = null){
			if (is_array($data)){
				extract($data);
			}
			include 'views/'.$view_name;
		}
	}
 ?>