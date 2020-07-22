<?php
require_once("conexion.php");
class Venta extends conexion{

	public function alta($fecha,$IDCliente,$Total,$tipo_pago){
	$this->sentencia = "INSERT INTO venta VALUES(null,'$fecha','$IDCliente','$Total','$tipo_pago')";
	$this->ejecutarSentencia();

	}
	public function consulta(){
		$this->sentencia = "SELECT c.nombre,c.apepaterno,c.apematerno,v.fecha,v.Total,v.tipo_pago FROM venta v,cliente c WHERE v.IDCliente=c.IDcliente";
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
public function obtenerClientes(){
		$this->sentencia = "SELECT IDCliente,nombre,apepaterno,apematerno FROM cliente";
		$res = $this->obtenerSentencia();
		echo "<select name='cliente'>";
		while($fila = $res->fetch_assoc()){
				echo "<option value='".$fila["IDCliente"]."'> ".$fila["nombre"]." ".$fila["apepaterno"]." ".$fila["apematerno"]."</option>";
		}
		echo "</select>";
}
}
?>

