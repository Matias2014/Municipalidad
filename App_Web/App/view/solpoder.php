<?php 
	include_once 'view/view.php';
	
	class Vistasolpoder extends View{
		
		public function mostrar(){
			$this->smarty->display('solpoder.tpl');			
		}

	}
?>