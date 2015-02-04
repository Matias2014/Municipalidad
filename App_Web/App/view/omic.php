<?php 
	include_once 'view/view.php';
	
	class Vistaomic extends View{
		
		public function mostrar(){
			$this->smarty->display('omic.tpl');			
		}

	}

?>