<?php 
	include_once 'view/view.php';
	
	class Vistaafiliacion extends View{
		
		public function mostrar(){
			$this->smarty->display('afiliacion.tpl');			
		}

	}

?>