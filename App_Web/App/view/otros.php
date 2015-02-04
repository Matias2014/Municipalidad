<?php 
	include_once 'view/view.php';
	
	class Vistaotros extends View{
		
		public function mostrar(){
			$this->smarty->display('otros.tpl');			
		}

	}

?>