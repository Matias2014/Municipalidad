<?php 
	include_once 'view/view.php';
	
	class Vistaespecialidad extends View{
		
		public $id;
		
		public function mostrar($r){
			$this->smarty->assign('id', $r);
			$this->smarty->display('especialidad.tpl');			
		}

	}
?>