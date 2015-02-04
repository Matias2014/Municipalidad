<?php 
	include_once 'view/view.php';
	
	class Vistacamping extends View{
		
		public function mostrar(){
			$this->smarty->display('camping.tpl');			
		}

	}
?>