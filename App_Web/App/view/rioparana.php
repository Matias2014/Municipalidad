<?php 
	include_once 'view/view.php';
	
	class Vistarioparana extends View{
		
		public function mostrar(){
			$this->smarty->display('rioparana.tpl');			
		}

	}

?>