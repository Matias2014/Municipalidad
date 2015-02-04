<?php 
	include_once 'view/view.php';
	
	class Vistatasas extends View{
		
		public function mostrar(){
			$this->smarty->display('tasas.tpl');			
		}

	}

?>