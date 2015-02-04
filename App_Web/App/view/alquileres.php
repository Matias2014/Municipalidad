<?php 
	include_once 'view/view.php';
	
	class Vistaalquileres extends View{
		
		public function mostrar(){
			$this->smarty->display('alquileres.tpl');			
		}

	}

?>