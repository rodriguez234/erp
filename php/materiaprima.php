<?php
require_once("conexion.php");
class Materiaprima extends Conexion{
	public function alta($Nombre,$Tipo,$Descripcion,$Precio,$Stock,$Existencias){
	$this->sentencia = "INSERT INTO materiaprima VALUES (null,'$Nombre','$Tipo','$Descripcion','$Precio','$Stock','$Existencias')";
	$this->ejecutarSentencia();

	}
	public function consulta(){
		$this->sentencia = "SELECT * FROM materiaprima";
		return $this->obtenerSentencia();
	}
	public function nombres(){
		$this->sentencia = "SELECT Nombre FROM materiaprima;";
		$res = $this->obtenerSentencia();
		$nombres = "";
		while($fila = $res->fetch_assoc()){
			$nombres = $nombres."'".$fila["Nombre"]."',";
		}
		return $nombres;
	}
	public function precios(){
		$this->sentencia = "SELECT Precio FROM materiaprima;";
		$res = $this->obtenerSentencia();
		$precios = "";
		while($fila = $res->fetch_assoc()){
			$precios = $precios.$fila["Precio"].",";
		}
		return $precios;
	}
	public function eliminar($id){
		$this->sentencia = "DELETE FROM materiaprima WHERE ID=$id";
		$this->ejecutarSentencia();
	}

}
?>