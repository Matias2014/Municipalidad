<!-- Agregar Guardias -->

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
</div><!-- /.modal -->