<?php
include_once "model.php";

class Usuario extends Model{

	function verificarusuario($reg){
		$sql = "SELECT id, usuario, correo FROM user WHERE (usuario = :usuario AND pass = :pass)";
		return $this->queryPrepare($sql, $reg);
	}
	
	function agregarguardia($reg){
		$sql = "INSERT INTO guardia (mgeneral, consultoriomg, mpediatria, consultoriomp, mterapia, consultoriomt, fecha) VALUES (:mgeneral, :consultoriomg, :mpediatria, :consultoriomp, :mterapia, :consultoriomt, :fecha)";
		return $this->queryPrepare($sql, $reg);
	}
	
	function editarprofesionales($reg){
		$sql = "UPDATE `hospital`.`profesionales` SET categoria = :categoria, ruta = :ruta WHERE `profesionales`.`categoria` = :categoria;";
		return $this->queryPrepare($sql, $reg);
	}
	
	function historial(){
		$sql = "SELECT * FROM guardia ORDER BY fecha DESC";
		return $this->query($sql);
	}
}
?>