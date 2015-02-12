<?php 
	class Controlador{
	
		/*          INDEX          */ 
	
		public function index(){
			include_once './view/index.php';
			$vista = new Vistaindex();
			$vista->mostrar();
		}
		
			/* SESION */
			
			public function ingresar(){
				include_once './model/login.php';
				$reg = array(':usuario'=>$_REQUEST["usuario"], ':pass'=>$_REQUEST["pass"]);
				
				$v = new Usuario();
								
				$consulta = $v->verificarusuario($reg);
				
				if (count($consulta) == 0){
					header('Location: index.php');
					exit();
				}else{
					$_SESSION['idusuario'] = $consulta[0]['id'];
					$_SESSION['usuario'] = $consulta[0]['usuario'];
					include_once './view/panel.php';
					$vista = new Vistapanel();
					$vista->mostrar();
				}
			}
			
			/* Despedirse */
			
			public function despedirse(){
				include './view/index.php';
				session_destroy();
				$vista = new Vistaindex();
				$vista->mostrar();
			}
			
			/* Agregar Guardia */
			
			public function agregarguardia(){
				if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
					include './view/panel.php';
					include './model/login.php';
					$reg = array(':mgeneral'=>$_REQUEST["mgeneral"], ':consultoriomg'=>$_REQUEST["consultoriomg"], ':mpediatria'=>$_REQUEST["mpediatria"], ':consultoriomp'=>$_REQUEST["consultoriomp"], ':mterapia'=>$_REQUEST["mterapia"], ':consultoriomt'=>$_REQUEST["consultoriomt"], ':fecha'=>$_REQUEST["fecha"]);
					$v = new Usuario();
					$consulta = $v->agregarguardia($reg);
					$vista = new Vistapanel();
					$vista->mostrar();
				}else{
					include_once './view/index.php';
					$vista = new Vistaindex();
					$vista->mostrar();
				}
			}
			
			/* Agregar/Editar Profesionales */
			
			public function profesionales(){
				if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
					include './view/panel.php';
					include './model/login.php';
					$reg = array(':categoria'=>$_REQUEST["categoria"], ':ruta'=>"https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/".$_REQUEST["ruta"]);
					$v = new Usuario();
					$consulta = $v->editarprofesionales($reg);
					$vista = new Vistapanel();
					$vista->mostrar();
				}else{
					include_once './view/index.php';
					$vista = new Vistaindex();
					$vista->mostrar();
				}
			}
			
			/* Historial */
			
			public function historial(){
				if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
					include './view/historial.php';
					include './model/login.php';
					$vista = new Vistahistorial();
					$v = new Usuario();
					$vista->lista = $v->historial();
					$vista->mostrar();
				}else{
					include_once './view/index.php';
					$vista = new Vistaindex();
					$vista->mostrar();
				}
			}
			
			
	
	}
?>
	