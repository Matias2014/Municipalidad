<?php 
	include_once 'view/view.php';
	
	class Vistabajap extends View{
		
		public function mostrar(){
			$this->smarty->display('bajap.tpl');			
		}

	}
?>