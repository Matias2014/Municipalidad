<?php 
	include_once 'view/view.php';
	
	class Vistadesarrollosocial extends View{
		
		public function mostrar(){
			$this->smarty->display('desarrollosocial.tpl');			
		}

	}
?>