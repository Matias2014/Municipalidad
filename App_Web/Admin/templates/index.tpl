{include file="header.tpl"}

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

</body>