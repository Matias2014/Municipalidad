<?php /* Smarty version Smarty-3.1.19, created on 2015-01-30 12:31:23
         compiled from ".\templates\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223054ca3ec95babc9-01095219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9184fe611d5a5ef8644d26f799386c55ffb88de1' => 
    array (
      0 => '.\\templates\\head.tpl',
      1 => 1422617479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223054ca3ec95babc9-01095219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ca3ec95f2935_99102486',
  'variables' => 
  array (
    'idusuario' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca3ec95f2935_99102486')) {function content_54ca3ec95f2935_99102486($_smarty_tpl) {?><!DOCTYPE html>

	<html>
		
		<head>
			<title> Municipalidad de Ayacucho </title>
			<link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
			<link href="bootstrap-3.2.0-dist/css/bootstrap-responsive.min.css" rel="stylesheet">
			<link href="css/estilo.css" rel="stylesheet" type="text/css">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<script language="javascript" type="text/javascript" src="javascript/jquery-2.1.1.min.js"></script>
				<script src="bootstrap-3.2.0-dist/js/jquery.js"></script>
				<script src="bootstrap-3.2.0-dist/js/bootstrap.js"></script>
			
		</head>

	<div class="nav">
		<?php if (($_smarty_tpl->tpl_vars['idusuario']->value)) {?>
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li data-toggle="modal" data-target="#Modal"> <a href="#Modal"> Cargar Guardias </a></li>
					</ul>
				
					<ul class="nav navbar-nav">
						<<li data-toggle="modal" data-target="#Modal3"> <a href="#Modal3"> Historial de Guardias </a></li>
					</ul>
					
					<ul class="nav navbar-nav">
						<li data-toggle="modal" data-target="#Modal2"> <a href="#Modal2"> Editar Medicos y Especialidades </a></li>
					</ul>
					
					<ul class="nav navbar-nav">
						<li><a href="index.php?action=despedirse.php"> Despedirse </a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
					  	 <span> Hola <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
! </span> 
					</ul>										
				</div>
			</nav>	
		<?php } else { ?>
			<p> La sesion no se inicio existosamente, por favor reintente. </p>
		<?php }?>
	</div><?php }} ?>
