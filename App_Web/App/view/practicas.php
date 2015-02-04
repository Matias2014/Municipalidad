<?php 
	include_once 'view/view.php';
	
	class Vistapracticas extends View{
		
		public function mostrar(){
			$this->smarty->display('practicas.tpl');			
		}

	}

?>