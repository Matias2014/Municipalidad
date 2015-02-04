<?php
	error_reporting(-1);
	//ini_set('display_errors', 1);
	session_start();
	
	if(!array_key_exists('action', $_REQUEST)){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->index();
	}else if($_REQUEST['action'] == 'ingresar.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ingresar();	
	}else if($_REQUEST['action'] == 'despedirse.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->despedirse();	
	}else if($_REQUEST['action'] == 'agregarguardia.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->agregarguardia();	
	}else if($_REQUEST['action'] == 'profesionales.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->profesionales();	
	}else if($_REQUEST['action'] == 'historial.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->historial();	
	}
?>	