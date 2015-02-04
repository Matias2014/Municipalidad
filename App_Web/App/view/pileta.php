<?php 
	include_once 'view/view.php';
	
	class Vistapileta extends View{
		
		public function mostrar(){
			$this->smarty->display('pileta.tpl');			
		}

	}

?>