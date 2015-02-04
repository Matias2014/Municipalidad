<?php 
	include_once 'view/view.php';
	
	class Vistaestservicio extends View{
		
		public function mostrar(){
			$this->smarty->display('estservicio.tpl');			
		}

	}
?>