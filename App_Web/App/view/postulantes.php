<?php 
	include_once 'view/view.php';
	
	class Vistapostulantes extends View{
		
		public function mostrar(){
			$this->smarty->display('postulantes.tpl');			
		}

	}

?>