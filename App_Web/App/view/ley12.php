<?php 
	include_once 'view/view.php';
	
	class Vistaley extends View{
		
		public function mostrar(){
			$this->smarty->display('ley12.tpl');			
		}

	}
?>