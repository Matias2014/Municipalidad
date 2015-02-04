<?php 
	include_once 'view/view.php';
	
	class Vistaconfiterias extends View{
		
		public function mostrar(){
			$this->smarty->display('confiterias.tpl');			
		}

	}
?>