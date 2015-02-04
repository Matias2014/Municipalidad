<?php 
	include_once 'view/view.php';
	
	class Vistadescuento extends View{
		
		public function mostrar(){
			$this->smarty->display('descuento.tpl');			
		}

	}
?>