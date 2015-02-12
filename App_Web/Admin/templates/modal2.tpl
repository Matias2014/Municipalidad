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
							<select class="form-control" name='categoria' id='categoria' placeholder="categoria">
								<option>clinica</option>
								<option>pediatria</option>
								<option>cirugia</option>
								<option>neumonologia</option>
								<option>otorrino</option>
								<option>neurologia</option>
								<option>oftalmologia</option>
								<option>odontologia</option>
								<option>gastro</option>
								<option>traumatologia</option>
								<option>cardio</option>
								<option>hematologia</option>
								<option>oncologia</option>
								<option>urologia</option>
								<option>ginecologia</option>
								<option>cirugiainf</option>
								<option>reumatologia</option>
								<option>fisiatra</option>
								<option>anestesiologia</option>
								<option>diabetologia</option>
								<option>psiquiatria</option>
								<option>nutricion</option>
								<option>obtetricia</option>
								<option>anatomia</option>
								<option>fonoudilogia</option>
								<option>terapiaoc</option>
								<option>psicologia</option>
								<option>psicopedagogia</option>
								<option>kinesiologia</option>
								<option>asistentes</option>
								<option>terapia</option>
								<option>diagnostico</option>
								<option>tomografia</option>
								<option>farmacia</option>
								<option>hemoterapia</option>
								<option>densitometria</option>
								<option>bioquimicos</option>
								<option>laboratorio</option>
							</select><br>
							<input type="file" name='ruta' id='ruta'> <br>
						</div> 
										
						<input value = "Cargar" class="btn btn-success" type = "submit" > 

					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->