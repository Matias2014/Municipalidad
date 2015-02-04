<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 13:52:40
         compiled from ".\templates\modal2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2001054cb6a310bdd51-52856419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd099fd9f3bf1b2366d7adf68349c1c8b1b94023c' => 
    array (
      0 => '.\\templates\\modal2.tpl',
      1 => 1422967951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2001054cb6a310bdd51-52856419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cb6a310c1d77_51432689',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cb6a310c1d77_51432689')) {function content_54cb6a310c1d77_51432689($_smarty_tpl) {?><!-- Agregar Guardias -->

<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"> Complete siguientes campos:</h4>
			</div>

			<div class="modal-body">
				<form method="POST">
					<input type="hidden" name="action" value="profesionales.php"/>
					<div class="row">
						<div>
							<label> Editar Profesionales </label><br>
							<input type="text" name='categoria' id='categoria' class="form-control" placeholder="categoria"> <br>
							<input type="file" name='ruta' id='ruta'> <br>
						</div> 
										
						<input value = "Cargar" class="btn btn-success" type = "submit" > 

					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }} ?>
