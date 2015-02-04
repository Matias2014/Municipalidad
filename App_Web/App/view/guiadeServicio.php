<?php 
	include_once 'view/view.php';
	
	class VistaguiadeServicio extends View{
		
		public function mostrar(){
			$this->smarty->display('guiadeServicios.tpl');			
		}

	}

?>