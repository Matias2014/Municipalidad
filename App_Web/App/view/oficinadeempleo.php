<?php 
	include_once 'view/view.php';
	
	class Vistaoficinadeempleo extends View{
		
		public function mostrar(){
			$this->smarty->display('oficinadeempleo.tpl');			
		}

	}

?>