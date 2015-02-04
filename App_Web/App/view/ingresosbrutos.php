<?php 
	include_once 'view/view.php';
	
	class Vistaingresosbrutos extends View{
		
		public function mostrar(){
			$this->smarty->display('ingresosbrutos.tpl');			
		}

	}

?>