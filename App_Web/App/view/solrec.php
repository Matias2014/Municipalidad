<?php 
	include_once 'view/view.php';
	
	class Vistasolrec extends View{
		
		public function mostrar(){
			$this->smarty->display('solrec.tpl');			
		}

	}
?>