<?php 
	require_once("conexion.php");
class Actividad extends Conexion { 
    public function alta($registro,$IDusuario,$movimiento_act,$movimiento_tabla){ //
	$this->sentencia = "INSERT INTO actividad VALUES(null,'$registro',$IDusuario,'$movimiento_act','$movimiento_tabla')"; //estos son los campos de la tabla actividad, la llave primaria no se pone  (solo se pone null), y si no tiene llave primaria si se ponen todos los campos
    $this->ejecutarSentencia();
		}

	public function consulta(){
		$this->sentencia = "SELECT * FROM actividad";
		return $this->obtenerSentencia();
		}

	public function eliminar($id){
		$this->sentencia = "DELETE FROM actividad  WHERE IDactividad=$id"; //actividad por que es la tabla y el IDactividad por que es su id de esa tabla osea la llave primaria de la tabla actividad, sino tiene llave primaria igual solo se pone el primer campo
		$this->ejecutarSentencia();
	}
	}
 ?>