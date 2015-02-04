<?php 
	include_once 'view/view.php';
	
	class VistainicioMuni extends View{
		
		public function mostrar(){
			$this->smarty->display('inicioMuni.tpl');			
		}

	}

?>