<?php 
	include_once 'view/view.php';
	
	class Vistapatente extends View{
		
		public function mostrar(){
			$this->smarty->display('patente.tpl');			
		}

	}

?>