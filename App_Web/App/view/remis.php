<?php 
	include_once 'view/view.php';
	
	class Vistaremis extends View{
		
		public function mostrar(){
			$this->smarty->display('remis.tpl');			
		}

	}
?>