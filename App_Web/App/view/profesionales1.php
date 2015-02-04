<?php 
	include_once 'view/view.php';
	
	class Vistaprofesionales1 extends View{
		
		public function mostrar(){
			$this->smarty->display('profesionales1.tpl');			
		}

	}

?>