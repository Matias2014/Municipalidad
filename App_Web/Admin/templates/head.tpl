<!DOCTYPE html>

	<html>
		
		<head>
			<title> Municipalidad de Ayacucho </title>
			<link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
			<link href="bootstrap-3.2.0-dist/css/bootstrap-responsive.min.css" rel="stylesheet">
			<link href="css/estilo.css" rel="stylesheet" type="text/css">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			{literal}
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<script language="javascript" type="text/javascript" src="javascript/jquery-2.1.1.min.js"></script>
				<script src="bootstrap-3.2.0-dist/js/jquery.js"></script>
				<script src="bootstrap-3.2.0-dist/js/bootstrap.js"></script>
			{/literal}
		</head>

	<div class="nav">
		{if ($idusuario)}
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
					  	 <span> Hola {$usuario}! </span> 
					</ul>										
				</div>
			</nav>	
		{else}
			<p> La sesion no se inicio existosamente, por favor reintente. </p>
		{/if}
	</div>