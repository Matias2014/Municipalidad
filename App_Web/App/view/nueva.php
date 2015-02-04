<?php 
	include_once 'view/view.php';
	
	class Vistanueva extends View{
		
		public function mostrar(){
			$this->smarty->display('nueva.tpl');			
		}

	}
?>