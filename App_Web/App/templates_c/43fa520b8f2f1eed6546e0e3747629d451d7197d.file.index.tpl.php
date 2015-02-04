<?php /* Smarty version Smarty-3.1.19, created on 2015-01-29 22:44:40
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:460254caa9c8a34ef5-93873110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43fa520b8f2f1eed6546e0e3747629d451d7197d' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1421754178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '460254caa9c8a34ef5-93873110',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54caa9c8c30454_36114459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54caa9c8c30454_36114459')) {function content_54caa9c8c30454_36114459($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
	
	<div class="botones">
			<a href="index.php?action=inicioHospital.php">
				<img class="hospital" src="Recorte/Inicio/BotonHospital_Inicio.jpg"> </button>
			</a>

			<a href="index.php?action=inicioMuni.php">
				<img class="Municipalidad" src="Recorte/Inicio/BotonMuni_Inicio.jpg"> </button>
			</a>
	</div>

</body>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
