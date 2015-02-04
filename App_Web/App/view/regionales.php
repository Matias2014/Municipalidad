<?php 
	include_once 'view/view.php';
	
	class Vistaregionales extends View{
		
		public function mostrar(){
			$this->smarty->display('regionales.tpl');			
		}

	}
?>