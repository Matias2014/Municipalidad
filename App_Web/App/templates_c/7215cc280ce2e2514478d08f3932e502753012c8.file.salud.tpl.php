<?php /* Smarty version Smarty-3.1.19, created on 2015-01-29 22:50:55
         compiled from ".\templates\salud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:260654caab3f749ac4-94137244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7215cc280ce2e2514478d08f3932e502753012c8' => 
    array (
      0 => '.\\templates\\salud.tpl',
      1 => 1422021042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260654caab3f749ac4-94137244',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54caab3f7e8b20_03829428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54caab3f7e8b20_03829428')) {function content_54caab3f7e8b20_03829428($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("lat1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
	<div class="lat2">
		<img src="Recorte/Guia de Tramites/Salud/Lat2_Salud.jpg" alt ="latera2" />	
	</div>
	
	<div class="guiadesalud">
		<img src="Recorte/Guia de Tramites/Salud/Bot00_Salud.jpg" alt ="indice" /> <br>
		<button class="menu" onClick="location.href='index.php?action=certificado.php'"> <img src="Recorte/Guia de Tramites/Salud/Bot01_Salud.jpg" alt ="indice" /> </button> <br>
		<button class="menu" onClick="location.href='index.php?action=afiliacion.php'"> <img src="Recorte/Guia de Tramites/Salud/Bot02_Salud.jpg" alt ="indice" /> </button> <br> 
		<button class="menu" onClick="location.href='index.php?action=medicacion.php'"> <img src="Recorte/Guia de Tramites/Salud/Bot03_Salud.jpg" alt ="indice" /> </button> <br>
		<button class="menu" onClick="location.href='index.php?action=transporte.php'"> <img src="Recorte/Guia de Tramites/Salud/Bot04_Salud.jpg" alt ="indice" /> </button> <br>
		<button class="menu" onClick="location.href='index.php?action=espectaculo.php'"> <img src="Recorte/Guia de Tramites/Salud/Bot05_Salud.jpg" alt ="indice" /> </button> <br>
	</div>
</body><?php }} ?>
