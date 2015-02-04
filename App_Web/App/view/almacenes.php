<?php 
	include_once 'view/view.php';
	
	class Vistaalmacenes extends View{
		
		public function mostrar(){
			$this->smarty->display('almacenes.tpl');			
		}

	}
?>