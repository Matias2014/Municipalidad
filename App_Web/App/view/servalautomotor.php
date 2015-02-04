<?php 
	include_once 'view/view.php';
	
	class Vistaservalautomotor extends View{
		
		public function mostrar(){
			$this->smarty->display('servalautomotor.tpl');			
		}

	}
?>