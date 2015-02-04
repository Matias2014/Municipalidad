<?php 
	include_once 'view/view.php';
	
	class Vistabaja extends View{
		
		public function mostrar(){
			$this->smarty->display('baja.tpl');			
		}

	}
?>