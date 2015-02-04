<?php 
	include_once 'view/view.php';
	
	class VistaagendaCultural extends View{
		
		public function mostrar(){
			$this->smarty->display('agendaCultural.tpl');			
		}

	}

?>