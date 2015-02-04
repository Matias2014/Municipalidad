<?php 
	include_once 'view/view.php';
	
	class Vistahogar extends View{
		
		public function mostrar(){
			$this->smarty->display('hogar.tpl');			
		}

	}
?>