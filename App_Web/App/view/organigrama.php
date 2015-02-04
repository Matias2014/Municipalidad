<?php 
	include_once 'view/view.php';
	
	class Vistaorganigrama extends View{
		
		public function mostrar(){
			$this->smarty->display('organigrama.tpl');			
		}

	}

?>