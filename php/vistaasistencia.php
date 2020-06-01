<?php 
	require_once("asistencia.php");
	$obj = new asistencia();
 ?>
<section id="principal">

	<form action="" method="post">
		Fecha: <input type="date" name="Fecha"> <br>
		IDempleado: <input type="text" name="IDempleado"> <br>
		Hora: <input type="time" name="Hora"> <br>
		Tipo:
		<select name="tipo">
			<option value="1">Administrador</option>
			<option value="2">Empleado</option>
		</select> <br>
		<input type="submit" value="Agregar asistencia" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$Fecha = $_POST["Fecha"];
			$IDempleado = $_POST["IDempleado"];
			$Hora = $_POST["Hora"];
			
			$obj->alta($Fecha,$IDempleado,$Hora,$tipo);
			echo "<h2>Asistencia agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha</th>
			<th>IDempleado</th>
			<th>Hora</th>
			<th>Tipo</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["Fecha"]."</td>";
				echo "<td>".$fila["IDempleado"]."</td>";
				echo "<td>".$fila["Hora"]."</td>";

				if($fila["Tipo"]==1){
					echo "<td>Administrador</td>";
				}else{
					echo "<td>Empleado</td>";
				}
				echo "</tr>";
			}
		 ?>
	</table>

</section>


