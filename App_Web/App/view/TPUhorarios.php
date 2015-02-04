<?php 
	include_once 'view/view.php';
	
	class VistaTPUhorarios extends View{
		
		public function mostrar(){
			$this->smarty->display('TPUhorarios.tpl');			
		}

	}

?>