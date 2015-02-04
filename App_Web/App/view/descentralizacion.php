<?php 
	include_once 'view/view.php';
	
	class Vistadescentralizacion extends View{
		
		public function mostrar(){
			$this->smarty->display('descentralizacion.tpl');			
		}

	}

?>