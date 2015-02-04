<?php 
	include_once 'view/view.php';
	
	class Vistabancos extends View{
		
		public function mostrar(){
			$this->smarty->display('bancos.tpl');			
		}

	}
?>