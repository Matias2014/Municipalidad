<?php 
	include_once 'view/view.php';
	
	class Vistainiciopersonal extends View{
		
		public function mostrar(){
			$this->smarty->display('iniciopersonal.tpl');			
		}

	}
?>