{include file="head.tpl"}

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

{include file="footer.tpl"}