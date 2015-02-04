<?php
include_once "model.php";

class Guardia_model extends Model{

	function load_guardia(){
		$sql = "SELECT mgeneral, consultoriomg, mpediatria, consultoriomp, mterapia, consultoriomt, EXTRACT(YEAR FROM fecha) AS anio, 
																									EXTRACT(MONTH FROM fecha) AS mes, 
																									EXTRACT(DAY FROM fecha) AS dia
				FROM `guardia` 
				WHERE fecha = CURDATE()";
		return $this->query($sql);		
	}
}
?>