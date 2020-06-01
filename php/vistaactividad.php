<?php 
	require_once("actividad.php");
	$obj = new actividad();
 ?>
<section id="principal">

	<form action="" method="post">
		Registro: <input type="text" name="regitro"> <br>
		IDusuario: <input type="text" name="IDusuario"> <br>
		Movimiento_act: <input type="text" name="movimiento_act"> <br>
		Movimiento_tabla:: <input type="text" name="Movimiento_tabla"> <br>
		<input type="submit" value="Agregar Actividad" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$Registro = $_POST["registro"];
			$IDusuario = $_POST["IDusuario"];
			$Movimiento_act = $_POST["movimiento_act"];
            $Movimiento_tabla= $_POST["movimiento_tabla"];
			$Tipo = $_POST["tipo"];
			
			$obj->alta($Registro,$Tipo,$IDusuario,$Movimiento_act,$Movimiento_tabla);
			echo "<h2>agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Registro</th>
			<th>IDusuario</th>
			<th>Movimiento_act</th>
			<th>Movimiento_tabla</th>
			<th>Tipo</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["registro"]."</td>";
				echo "<td>".$fila["IDusuario"]."</td>";
             	
		 ?>
	</table>

</section>
