<?php 
	include_once 'view/view.php';
	
	class Vistadocinternacion extends View{
		
		public function mostrar(){
			$this->smarty->display('docinternacion.tpl');			
		}

	}

?>