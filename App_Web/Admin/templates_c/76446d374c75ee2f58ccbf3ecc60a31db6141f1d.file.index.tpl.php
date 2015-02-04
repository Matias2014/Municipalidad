<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 13:33:26
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59754ca2c52e9e9d3-39197966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76446d374c75ee2f58ccbf3ecc60a31db6141f1d' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1422966797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59754ca2c52e9e9d3-39197966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ca2c53032199_80202911',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca2c53032199_80202911')) {function content_54ca2c53032199_80202911($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
	<div class="top"> 
		<img src="Recorte/Inicio/Top_Inicio.jpg" alt ="Top" />
	</div>
	
	<div class="carrousel">
		<img name="miImagen">
		<script>
			i = 0;
			direccion = new Array();
			direccion[0] = "Recorte/Inicio/Foto1_Inicio.jpg";
			direccion[1] = "Recorte/Inicio/Foto2_Inicio.jpg";
			direccion[2] = "Recorte/Inicio/Foto3_Inicio.jpg";
			direccion[3] = "Recorte/Inicio/Foto4_Inicio.jpg";
			function cambiaIMG(){
				 i = i+1;
				 if(i == direccion.length)i = 0;
				 document.images.miImagen.src = direccion[i];
				 setTimeout('cambiaIMG()',3000)
			};
			cambiaIMG()
		</script>
	</div>
	
	<fieldset class="cuadro">
		<form method="POST">
			<input type="hidden" name="action" value="ingresar.php"/>
			<div class="form-group">
				<label> Usuario </label>
				<input type="text" id="usuario" name="usuario" class="form-control">
			</div>
		
			<div class="form-group">
				<label> Contrase&ntildea </label>
				<input type="password" id="pass" name="pass" class="form-control">
			</div>
  
			<button type="submit" class="btn btn-default"> Ingresar </button>
		
		</form>
	</fieldset>

</body><?php }} ?>
