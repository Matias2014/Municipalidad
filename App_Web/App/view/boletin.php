<?php 
	include_once 'view/view.php';
	
	class Vistaboletin extends View{
		
		public function mostrar(){
			$this->smarty->display('boletin.tpl');			
		}

	}

?>