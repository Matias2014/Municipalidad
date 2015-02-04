<?php 
	include_once 'view/view.php';
	
	class Vistaintcultural extends View{
		
		public function mostrar(){
			$this->smarty->display('intcultural.tpl');			
		}

	}
?>