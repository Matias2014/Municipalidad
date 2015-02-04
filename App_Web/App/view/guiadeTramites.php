<?php 
	include_once 'view/view.php';
	
	class VistaguiadeTramites extends View{
		
		public function mostrar(){
			$this->smarty->display('guiadeTramites.tpl');			
		}

	}

?>