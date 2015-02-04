<?php 
	include_once 'view/view.php';
	
	class Vistapanda extends View{
		
		public function mostrar(){
			$this->smarty->display('panda.tpl');			
		}

	}

?>