<?php 
	include_once 'view/view.php';
	
	class Vistacalendarioturistico extends View{
		
		public function mostrar(){
			$this->smarty->display('calendarioturistico.tpl');			
		}

	}

?>