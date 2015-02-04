<?php 
	include_once 'view/view.php';
	
	class Vistaprensa extends View{
		
		public function mostrar(){
			$this->smarty->display('prensa.tpl');			
		}

	}
?>