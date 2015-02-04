<?php 
	include_once 'view/view.php';
	
	class Vistaduplicado extends View{
		
		public function mostrar(){
			$this->smarty->display('duplicado.tpl');			
		}

	}
?>