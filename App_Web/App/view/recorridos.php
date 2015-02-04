<?php 
	include_once 'view/view.php';
	
	class Vistarecorridos extends View{
		
		public function mostrar(){
			$this->smarty->display('recorridos.tpl');			
		}

	}

?>