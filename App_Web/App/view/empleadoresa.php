<?php 
	include_once 'view/view.php';
	
	class Vistaempleadoresa extends View{
		
		public function mostrar(){
			$this->smarty->display('empleadoresa.tpl');			
		}

	}

?>