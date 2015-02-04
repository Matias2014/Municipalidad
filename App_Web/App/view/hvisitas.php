<?php 
	include_once 'view/view.php';
	
	class Vistahvisitas extends View{
		
		public function mostrar(){
			$this->smarty->display('hvisitas.tpl');			
		}

	}

?>