<?php 
	include_once 'view/view.php';
	
	class Vistarestaurant extends View{
		
		public function mostrar(){
			$this->smarty->display('restaurant.tpl');			
		}

	}
?>