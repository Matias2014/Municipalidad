<?php 
	include_once 'view/view.php';
	
	class Vistavacunacion extends View{
		
		public function mostrar(){
			$this->smarty->display('vacunacion.tpl');			
		}

	}

?>