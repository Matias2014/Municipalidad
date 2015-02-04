<?php 
	include_once 'view/view.php';
	
	class Vistaindex extends View{
		
		public function mostrar(){
			$this->smarty->display('index.tpl');			
		}

	}

?>