<?php 
	include_once 'view/view.php';
	
	class Vistacertificado extends View{
		
		public function mostrar(){
			$this->smarty->display('certificado.tpl');			
		}

	}

?>