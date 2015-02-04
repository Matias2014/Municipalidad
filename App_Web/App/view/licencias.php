<?php 
	include_once 'view/view.php';
	
	class Vistalicencias extends View{
		
		public function mostrar(){
			$this->smarty->display('licencias.tpl');			
		}

	}
?>