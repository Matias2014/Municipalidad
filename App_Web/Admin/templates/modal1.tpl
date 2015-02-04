<!-- Agregar Guardias -->

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"> Complete siguientes campos:</h4>
			</div>

			<div class="modal-body">
				<form method="POST">
					<input type="hidden" name="action" value="agregarguardia.php"/>
					<div class="row">
						<div>
							<label> Guardia Medico General </label>
							<input type="text" name='mgeneral' id='mgeneral' class="form-control" placeholder="Dr. Juan Perez"> <br>
							<input type="text" name='consultoriomg' id='consultoriomg' class="form-control" placeholder="Consultorio XX"> <br> <br>
						</div> 
										
						<div>
							<label> Guardia Medico Infantil </label>
							<input type="text" name='mpediatria' id='mpediatria' class="form-control" placeholder="Dr. Juan Perez"> <br>
							<input type="text" name='consultoriomp' id='consultoriomp' class="form-control" placeholder="Consultorio XX"> <br> <br>
						</div> 
						
						<div>
							<label> Guardia Medico Terapia Intensiva </label>
							<input type="text" name='mterapia' id='mterapia' class="form-control" placeholder="Dr. Juan Perez"> <br>
							<input type="text" name='consultoriomt' id='consultoriomt' class="form-control" placeholder="Sala de Cuidados Intensivos"> <br> <br>
						</div> 
						
						<div>
							<label> Fecha </label>
							<input type="date" name='fecha' id='fecha' class="form-control"> <br>
						</div> 
										
						<input value = "Cargar" class="btn btn-success" type = "submit" > 

					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->