<?php

require_once("conexion.php");

class empleado extends conexion
{
	
	public function alta($nombre,$appaterno,$apmaterno,$correo,$rfc,$telefono,$fechadeingreso,$cargo,$salario,$estadocivil,$nss)
	{
		$this->sentencia = "INSERT INTO empleado VALUES(null, '$nombre','$appaterno','$apmaterno','$correo','$rfc','$telefono','$fechadeingreso','$cargo','$salario','$estadocivil','$nss')";
		$this->ejecutarSentencia();

	}
	public function consulta(){
	$this->sentencia = "SELECT * FROM empleado";
	return $this->obtenerSentencia();
}
public function eliminar($id){
		$this->sentencia = "DELETE FROM empleado WHERE
		IDempleado=$id";
		$this->ejecutarSentencia();

	}
}
?>