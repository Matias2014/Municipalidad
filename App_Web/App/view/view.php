<?php 
	include_once ('Smarty-3.1.19/libs/Smarty.class.php');
	
	class View {

		public $smarty;
	
		function __construct(){
		$this->smarty = new Smarty;
		}
	}

?>