<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 13:03:28
         compiled from ".\templates\guardia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303954caa833cd77d4-34372946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7df4f125419c0c3efe287fdf97787e32e49600e' => 
    array (
      0 => '.\\templates\\guardia.tpl',
      1 => 1422965006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303954caa833cd77d4-34372946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54caa833de27e2_53009090',
  'variables' => 
  array (
    'lista' => 0,
    'guardia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54caa833de27e2_53009090')) {function content_54caa833de27e2_53009090($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("tophospital.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("lat1h.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
	<div class="lat2">
		<img src="Recorte/Hospital/HOS_Guardia/Lat2_HOS_Guardia.jpg" alt ="latera2" />	
	</div>
	
	<div class="info">
		<?php  $_smarty_tpl->tpl_vars['guardia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['guardia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['guardia']->key => $_smarty_tpl->tpl_vars['guardia']->value) {
$_smarty_tpl->tpl_vars['guardia']->_loop = true;
?>
			<div class="guardias">
					<button class="menu" onClick="location.href=''"> <img src="Recorte/Hospital/HOS_Guardia/general.jpg" alt ="latera2" /> </button>
					
					<button class="menu" onClick="location.href=''"> <img src="Recorte/Hospital/HOS_Guardia/pediatria.jpg" alt ="latera2" /> </button>
				
					<button class="menu" onClick="location.href=''"> <img src="Recorte/Hospital/HOS_Guardia/terapia.jpg" alt ="latera2" /> </button>
			</div>
			
			<div>
				<img src="Recorte/Hospital/HOS_Guardia/info.jpg" alt ="latera2" />
			</div>
			
			<div class="dia">
				<span class="dia"> <?php echo $_smarty_tpl->tpl_vars['guardia']->value['dia'];?>
 </span> 
				<span class="mes"> <?php echo $_smarty_tpl->tpl_vars['guardia']->value['mes'];?>
 </span>
				<span class="anio"> <?php echo $_smarty_tpl->tpl_vars['guardia']->value['anio'];?>
 </span>
			</div>
			
			<div class="medicos">
				<span class="general"> <?php echo $_smarty_tpl->tpl_vars['guardia']->value['mgeneral'];?>
 </span>
				<span class="pediatria"> <?php echo $_smarty_tpl->tpl_vars['guardia']->value['mpediatria'];?>
 </span>
				<span class="terapia"> <?php echo $_smarty_tpl->tpl_vars['guardia']->value['mterapia'];?>
 </span>
			</div>
			
			<div class="consultorios">
				<span class="cgeneral"> <?php echo $_smarty_tpl->tpl_vars['guardia']->value['consultoriomg'];?>
 </span>
				<span class="cpediatria"> <?php echo $_smarty_tpl->tpl_vars['guardia']->value['consultoriomp'];?>
 </span>
				<span class="cterapia"> <?php echo $_smarty_tpl->tpl_vars['guardia']->value['consultoriomt'];?>
 </span>
			</div>
		<?php }
if (!$_smarty_tpl->tpl_vars['guardia']->_loop) {
?>
			<div class="guardias">
				<button class="menu" onClick="location.href=''"> <img src="Recorte/Hospital/HOS_Guardia/general.jpg" alt ="latera2" /> </button>
				<button class="menu" onClick="location.href=''"> <img src="Recorte/Hospital/HOS_Guardia/pediatria.jpg" alt ="latera2" /> </button>
				<button class="menu" onClick="location.href=''"> <img src="Recorte/Hospital/HOS_Guardia/terapia.jpg" alt ="latera2" /> </button>
				
			</div>
			
			<div>
				<img src="Recorte/Hospital/HOS_Guardia/info.jpg" alt ="latera2" />
			</div>	
			<span class="general1"> No hay datos </span>	
			<span class="pediatria1"> No hay datos </span>
			<span class="terapia1"> No hay datos </span>
		<?php } ?>
	</div>
</body><?php }} ?>
