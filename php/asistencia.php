<?php

require_once("conexion.php");

class asistencia extends conexion
{
	
	public function alta($Fecha,$IDempleado,$hora)
	{
		$this->sentencia = "INSERT INTO asistencia VALUES(null, '$Fecha','$IDempleado','$hora')";
		$this->ejecutarSentencia();

	}
	public function consulta(){
	$this->sentencia = "SELECT * FROM asistencia";
	return $this->obtenerSentencia();
}
public function eliminar($id){
		$this->sentencia = "DELETE FROM asistencia WHERE
		IDasistencia=$id";
		$this->ejecutarSentencia();

	}
}
?>