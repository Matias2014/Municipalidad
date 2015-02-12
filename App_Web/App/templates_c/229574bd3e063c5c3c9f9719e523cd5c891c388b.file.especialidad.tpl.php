<?php /* Smarty version Smarty-3.1.19, created on 2015-02-04 12:53:52
         compiled from ".\templates\especialidad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:707554caa4e7ea3ac2-68198551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '229574bd3e063c5c3c9f9719e523cd5c891c388b' => 
    array (
      0 => '.\\templates\\especialidad.tpl',
      1 => 1423049271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '707554caa4e7ea3ac2-68198551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54caa4e7f1aa00_88142478',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54caa4e7f1aa00_88142478')) {function content_54caa4e7f1aa00_88142478($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("tophospital.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("lat1h.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
	
	<div class="lat2">
		<img src="Recorte/Hospital/HOS_Profesionales y Servicios/Lat2_H_ProfyServ.jpg" alt ="Botonera" />
	</div>
	
	<div class="info">
		<img src="<?php echo $_smarty_tpl->tpl_vars['id']->value['ruta'];?>
" alt ="Botonera" />
	</div>

</body><?php }} ?>
