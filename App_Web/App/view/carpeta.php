<?php 
	include_once 'view/view.php';
	
	class Vistacarpeta extends View{
		
		public function mostrar(){
			$this->smarty->display('carpeta.tpl');			
		}

	}

?>