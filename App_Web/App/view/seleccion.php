<?php 
	include_once 'view/view.php';
	
	class Vistaseleccion extends View{
		
		public function mostrar(){
			$this->smarty->display('seleccion.tpl');			
		}

	}

?>