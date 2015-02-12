<?php 
	include_once 'view/view.php';
	
	class VistahospitalOncologico extends View{
		
		public function mostrar(){
			$this->smarty->display('hospitalOncologico.tpl');			
		}

	}

?>