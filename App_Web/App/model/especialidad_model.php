<?php
include_once "model.php";

class especialidad_model extends Model{
	
	function especialidad($id){
		$sql = "SELECT * FROM profesionales WHERE categoria=:id";
		$arr = array(':id'=>$id);
		return $this->queryPrepare($sql,$arr);		
	}
}
?>