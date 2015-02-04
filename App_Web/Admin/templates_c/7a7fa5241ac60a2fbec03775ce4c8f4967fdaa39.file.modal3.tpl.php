<?php /* Smarty version Smarty-3.1.19, created on 2015-01-30 13:37:53
         compiled from ".\templates\modal3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2328754cb6bc7d600e6-13612630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a7fa5241ac60a2fbec03775ce4c8f4967fdaa39' => 
    array (
      0 => '.\\templates\\modal3.tpl',
      1 => 1422620286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2328754cb6bc7d600e6-13612630',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cb6bc7d642e1_62878661',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cb6bc7d642e1_62878661')) {function content_54cb6bc7d642e1_62878661($_smarty_tpl) {?><!-- Historial de medicos de guardia -->

<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"> Aviso! </h4>
			</div>

			<div class="modal-body">
				<form method="POST">
					<input type="hidden" name="action" value="historial.php"/>
					<div class="row">
						
						A continuacion se detallaran todas las guardias realizas desde el comienzo de uso de la aplicacion hasta el dia de la fecha... <br><br>
										
						<input value = "Cargar" class="btn btn-success" type = "submit" > 

					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }} ?>
