<?php 
	include_once 'view/view.php';
	
	class Vistaempleadoresp extends View{
		
		public function mostrar(){
			$this->smarty->display('empleadoresp.tpl');			
		}

	}

?>