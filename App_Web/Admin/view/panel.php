<?php 
	include_once 'view/view.php';
	
	class Vistapanel extends View{
	
		public function mostrar(){
			$this->smarty->display('panel.tpl');			
		}
	
	}
?>