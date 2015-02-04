<?php 
	include_once 'view/view.php';
	
	class Vistaprog extends View{
		
		public function mostrar(){
			$this->smarty->display('prog.tpl');			
		}

	}
?>