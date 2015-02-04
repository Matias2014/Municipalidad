<?php 
	include_once 'view/view.php';
	
	class Vistarural extends View{
		
		public function mostrar(){
			$this->smarty->display('rural.tpl');			
		}

	}
?>