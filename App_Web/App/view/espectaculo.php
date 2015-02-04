<?php 
	include_once 'view/view.php';
	
	class Vistaespectaculo extends View{
		
		public function mostrar(){
			$this->smarty->display('espectaculo.tpl');			
		}

	}

?>