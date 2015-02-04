<?php 
	include_once 'view/view.php';
	
	class Vistacaps extends View{
		
		public function mostrar(){
			$this->smarty->display('caps.tpl');			
		}

	}

?>