<?php 
	include_once 'view/view.php';
	
	class Vistalocutorios extends View{
		
		public function mostrar(){
			$this->smarty->display('locutorios.tpl');			
		}

	}
?>