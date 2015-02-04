<?php 
	include_once 'view/view.php';
	
	class Vistaalojamiento extends View{
		
		public function mostrar(){
			$this->smarty->display('alojamiento.tpl');			
		}

	}
?>