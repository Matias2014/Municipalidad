<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 13:33:41
         compiled from ".\templates\historial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1746554cb7b83c0fc46-69295321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8e8e67725741d9159239aa3b68ba171975447e' => 
    array (
      0 => '.\\templates\\historial.tpl',
      1 => 1422966792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1746554cb7b83c0fc46-69295321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cb7b83d04010_38191464',
  'variables' => 
  array (
    'lista' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cb7b83d04010_38191464')) {function content_54cb7b83d04010_38191464($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("modal1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("modal2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("modal3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="index">
	<div class="box">
		<table class="table table-hover">
		<thead>
			<th> Medico General </th>
			<th> Consultorio </th>
			<th> Medico Infantil </th>
			<th> Consultorio </th>
			<th> Medico Terapia </th>
			<th> Consultorio </th>
			<th> Fecha </th>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
			<tbody>
				<td> <?php echo $_smarty_tpl->tpl_vars['datos']->value['mgeneral'];?>
 </td>
				<td> <?php echo $_smarty_tpl->tpl_vars['datos']->value['consultoriomg'];?>
 </td>
				<td> <?php echo $_smarty_tpl->tpl_vars['datos']->value['mpediatria'];?>
 </td>
				<td> <?php echo $_smarty_tpl->tpl_vars['datos']->value['consultoriomp'];?>
 </td>
				<td> <?php echo $_smarty_tpl->tpl_vars['datos']->value['mterapia'];?>
 </td>
				<td> <?php echo $_smarty_tpl->tpl_vars['datos']->value['consultoriomt'];?>
 </td>
				<td> <?php echo $_smarty_tpl->tpl_vars['datos']->value['fecha'];?>
 </td>
			</tbody>
		<?php }
if (!$_smarty_tpl->tpl_vars['datos']->_loop) {
?>
			<tbody>
				<td> <p> No se registraron guardias hasta el momento </p> </td>
			</tbody>
		<?php } ?>
		</table>
	</div>
</body><?php }} ?>
