<?php 
	include_once 'view/view.php';
	
	class Vistaprofesional extends View{
		
		public function mostrar(){
			$this->smarty->display('profesional.tpl');			
		}

	}
?>