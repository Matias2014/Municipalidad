<?php 
	include_once 'view/view.php';
	
	class VistaPersonalContacto extends View{
		
		public function mostrar(){
			$this->smarty->display('PersonalContacto.tpl');			
		}

	}
?>