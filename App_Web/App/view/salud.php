<?php 
	include_once 'view/view.php';
	
	class Vistasalud extends View{
		
		public function mostrar(){
			$this->smarty->display('salud.tpl');			
		}

	}

?>