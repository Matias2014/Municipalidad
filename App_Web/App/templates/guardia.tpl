{include file="head.tpl"}

{include file="tophospital.tpl"}

{include file="lat1h.tpl"}

<body>
	<div class="lat2">
		<img src="Recorte/Hospital/HOS_Guardia/Lat2_HOS_Guardia.jpg" alt ="latera2" />	
	</div>
	
	<div class="info">
		{foreach $lista as $guardia}
			<div class="guardias">
					<button class="menu" onClick="location.href=''"> <img src="Recorte/Hospital/HOS_Guardia/general.jpg" alt ="latera2" /> </button>
					
					<button class="menu" onClick="location.href=''"> <img src="Recorte/Hospital/HOS_Guardia/pediatria.jpg" alt ="latera2" /> </button>
				
					<button class="menu" onClick="location.href=''"> <img src="Recorte/Hospital/HOS_Guardia/terapia.jpg" alt ="latera2" /> </button>
			</div>
			
			<div>
				<img src="Recorte/Hospital/HOS_Guardia/info.jpg" alt ="latera2" />
			</div>
			
			<div class="dia">
				<span class="dia"> {$guardia.dia} </span> 
				<span class="mes"> {$guardia.mes} </span>
				<span class="anio"> {$guardia.anio} </span>
			</div>
			
			<div class="medicos">
				<span class="general"> {$guardia.mgeneral} </span>
				<span class="pediatria"> {$guardia.mpediatria} </span>
				<span class="terapia"> {$guardia.mterapia} </span>
			</div>
			
			<div class="consultorios">
				<span class="cgeneral"> {$guardia.consultoriomg} </span>
				<span class="cpediatria"> {$guardia.consultoriomp} </span>
				<span class="cterapia"> {$guardia.consultoriomt} </span>
			</div>
		{foreachelse}
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
		{/foreach}
	</div>
</body>