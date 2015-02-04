<?php 
	include_once 'view/view.php';
	
	class Vistamedicacion extends View{
		
		public function mostrar(){
			$this->smarty->display('medicacion.tpl');			
		}

	}

?>