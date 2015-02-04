<?php 
	include_once 'view/view.php';
	
	class VistainicioHospital extends View{
		
		public function mostrar(){
			$this->smarty->display('inicioHospital.tpl');			
		}

	}

?>