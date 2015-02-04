<?php 
	include_once 'view/view.php';
	
	class Vistafarmacias extends View{
		
		public function mostrar(){
			$this->smarty->display('farmacias.tpl');			
		}

	}
?>