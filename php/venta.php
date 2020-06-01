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
	
	
	public function eliminar($id){
		$this->sentencia = "DELETE FROM venta WHERE IDVenta=$id";
		$this->ejecutarSentencia();
	}

}
?>
