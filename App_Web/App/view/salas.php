<?php 
	include_once 'view/view.php';
	
	class Vistasalas extends View{
		
		public function mostrar(){
			$this->smarty->display('salas.tpl');			
		}

	}

?>