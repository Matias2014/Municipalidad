<?php 
	include_once 'view/view.php';
	
	class Vistaprofesionales extends View{
		
		public function mostrar(){
			$this->smarty->display('profesionales.tpl');			
		}

	}

?>