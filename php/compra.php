<?php

require_once("conexion.php");

class compra extends conexion
{
	
	public function alta($fecha,$total,$tipo_pago,$id_cliente)
	{
		$this->sentencia = "INSERT INTO compra VALUES(null, '$fecha','$total','$tipo_pago','$id_cliente')";
		$this->ejecutarSentencia();

	}
	public function consulta(){
	$this->sentencia = "SELECT c.nombre,c.apepaterno,c.apematerno, p.fecha,p.total,p.tipo_pago FROM compra  p, cliente c WHERE p.id_cliente=c.IDcliente";
	return $this->obtenerSentencia();
}

	public function idcompras(){
		$this->sentencia = "SELECT IDcompra FROM compra;";
		$res = $this->obtenerSentencia();
		$idcompras = "";
		while($fila = $res->fetch_assoc()){
			$idcompras = $idcompras."'".$fila["IDcompra"]."',";
		}
		return $idcompras;
	}
	public function totales(){
		$this->sentencia = "SELECT total FROM compra;";
		$res = $this->obtenerSentencia();
		$totales = "";
		while($fila = $res->fetch_assoc()){
			$totales = $totales.$fila["total"].",";
		}
		return $totales;
	}
public function eliminar($id){
		$this->sentencia = "DELETE FROM compra WHERE
		IDcompra=$id";
		$this->ejecutarSentencia();
	}
	public function obtenerCliente(){
		$this-> sentencia = "SELECT IDcliente,nombre,apepaterno,apematerno FROM cliente ";
		$res = $this->obtenerSentencia();
		echo "<select name='cliente'>";
		while($fila = $res->fetch_assoc()){
			echo "<option value='".$fila["IDcliente"]."'> ".$fila["nombre"]." ".$fila["apepaterno"]." ".$fila["apematerno"]."</option>";
		}
		echo "</select>";
	}
}
?>