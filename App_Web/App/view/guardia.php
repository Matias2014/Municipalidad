<?php 
	include_once 'view/view.php';
	
	class Vistaguardia extends View{
		
		public $lista;
		
		public function mostrar(){
			$this->smarty->assign('lista', $this->lista);
			$this->smarty->display('guardia.tpl');			
		}

	}

?>