<?php 
	include_once 'view/view.php';
	
	class Vistadatos extends View{
		
		public function mostrar(){
			$this->smarty->display('datos.tpl');			
		}

	}
?>