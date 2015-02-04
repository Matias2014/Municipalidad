<?php 
	include_once 'view/view.php';
	
	class Vistatransporte extends View{
		
		public function mostrar(){
			$this->smarty->display('transporte.tpl');			
		}

	}

?>