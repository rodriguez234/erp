<?php
require_once("conexion.php");
class Venta extends conexion{
	public function alta($IDVenta,$fecha,$IDCliente,$Total,$tipo_pago){
	$this->sentencia = "INSERT INTO venta VALUES ('$IDVenta','$fecha','$IDCliente','$Total','$tipo_pago')";
	$this->ejecutarSentencia();

	}
	public function consulta(){
		$this->sentencia = "SELECT * FROM venta";
		return $this->obtenerSentencia();
	}
	public function idventas(){
		$this->sentencia = "SELECT IDVenta FROM venta;";
		$res = $this->obtenerSentencia();
		$idventas = "";
		while($fila = $res->fetch_assoc()){
			$idventas = $idventas."'".$fila["IDVenta"]."',";
		}
		return $idventas;
	}
	public function totales(){
		$this->sentencia = "SELECT Total FROM venta;";
		$res = $this->obtenerSentencia();
		$totales = "";
		while($fila = $res->fetch_assoc()){
			$totales = $totales.$fila["Total"].",";
		}
		return $totales;
	}
	
	
	public function eliminar($id){
		$this->sentencia = "DELETE FROM venta WHERE IDVenta=$id";
		$this->ejecutarSentencia();
	}

}
?>
