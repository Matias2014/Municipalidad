<?php /* Smarty version Smarty-3.1.19, created on 2015-01-29 22:56:01
         compiled from ".\templates\iniciopersonal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:354254caac71bfcec8-00088828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e02e563f74c572778ea5a7330a317f211c40c9fb' => 
    array (
      0 => '.\\templates\\iniciopersonal.tpl',
      1 => 1422027270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '354254caac71bfcec8-00088828',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54caac71cdb3f3_56542427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54caac71cdb3f3_56542427')) {function content_54caac71cdb3f3_56542427($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("lat1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>

	<div class="lat2">
		<img src="Recorte/InfoPersonal/Lat2_Personal.jpg" alt ="lateral" />	
	</div>
	
	<div class="infopersonal">
		<button class="menu" onClick="location.href='index.php?action=PersonalContacto.php'"> <img src="Recorte/InfoPersonal/rrhh.jpg" alt ="Botonera" />
		<button class="menu" onClick="location.href='index.php?action=ley.php'"> <img src="Recorte/InfoPersonal/ley.jpg" alt ="Botonera" />
		<button class="menu" onClick="location.href='index.php?action=organigrama.php'"> <img src="Recorte/InfoPersonal/organigrama.jpg" alt ="Botonera" />
		<button class="menu" onClick="location.href='index.php?action=seleccion.php'"> <img src="Recorte/InfoPersonal/seleccion.jpg" alt ="Botonera" />
		<button class="menu" onClick="location.href='index.php?action=carpeta.php'"> <img src="Recorte/InfoPersonal/carpetamed.jpg" alt ="Botonera" />
	</div>
	
</body><?php }} ?>
