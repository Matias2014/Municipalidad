<?php 
	include_once 'view/view.php';
	
	class Vistarecreacion extends View{
		
		public function mostrar(){
			$this->smarty->display('recreacion.tpl');			
		}

	}
?>