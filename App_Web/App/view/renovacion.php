<?php 
	include_once 'view/view.php';
	
	class Vistarenovacion extends View{
		
		public function mostrar(){
			$this->smarty->display('renovacion.tpl');			
		}

	}
?>