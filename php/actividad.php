<?php 

require_once("conexion.php");

class actividad extends Conexion{

	 
		public function alta($registro,$IDusuario,$movimiento_act,$movimiento_tabla)
		{
		$this->sentencia = "INSERT INTO usuario VALUES (null,$registro','$IDusuario','$movimiento_act','$movimiento_tabla')";
		$this->ejecutarSentencia();

	}

	public function consulta(){
		$this->sentencia = "SELECT * FROM actividad";
		return $this->obtenerSentencia();
	}
	public function eliminar($id){
		$this->sentencia = "DELETE FROM actividad WHERE
		IDactividad=$id";
		$this->ejecutarSentencia();

	}
}


 ?>
