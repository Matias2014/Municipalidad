<?php 
	include_once 'view/view.php';
	
	class Vistacarnet extends View{
		
		public function mostrar(){
			$this->smarty->display('carnet.tpl');			
		}

	}

?>