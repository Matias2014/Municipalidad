<?php 
	include_once 'view/view.php';
	
	class Vistaopds extends View{
		
		public function mostrar(){
			$this->smarty->display('opds.tpl');			
		}

	}

?>