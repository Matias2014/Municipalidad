<?php 
	include_once 'view/view.php';
	
	class Vistajubilacion extends View{
		
		public function mostrar(){
			$this->smarty->display('jubilacion.tpl');			
		}

	}
?>