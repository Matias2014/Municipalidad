<?php 
	include_once 'view/view.php';
	
	class Vistahistorial extends View{
		
		public $lista;
		
		public function mostrar(){
			$smarty = new Smarty();
			$this->smarty->assign('lista', $this->lista);
			$this->smarty->display('historial.tpl');			
		}
	}
?>