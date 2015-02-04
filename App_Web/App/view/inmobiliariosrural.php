<?php 
	include_once 'view/view.php';
	
	class Vistainmobiliariosrural extends View{
		
		public function mostrar(){
			$this->smarty->display('inmobiliariosrural.tpl');			
		}

	}

?>