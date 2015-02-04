<?php 
	include_once 'view/view.php';
	
	class Vistapension extends View{
		
		public function mostrar(){
			$this->smarty->display('pension.tpl');			
		}

	}
?>