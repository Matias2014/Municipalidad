<!-- Historial de medicos de guardia -->

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
</div><!-- /.modal -->