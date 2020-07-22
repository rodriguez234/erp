<?php 
	require_once("asistencia.php");
	$obj = new asistencia();
 ?>
<section id="principal">
<div>
		<a href="?sec=rasi"><input type="button" value="Generar Reporte de Asistencia"></a>
	</div>
	<form action="" method="post">
		Fecha de Asistencia: <input type="date" name="fecha"> <br>
		Lista de Empleados:
		<?php
		$obj->obtenerEmpleado();
		?>
		<br>
		Hora: <input type="time" name="Hora"> <br>
		</select> <br>
		<input type="submit" value="Agregar asistencia" name="alta">
		<br>
		<?php 
            if(isset($_GET["e"])){
			echo "<h2>Asistencia eliminada</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Asistencia agregada</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$Fecha = $_POST["Fecha"];
			$IDempleado = $_POST["empleado"];
			$Hora = $_POST["hora"];
			
			$obj->alta($fecha,$IDempleado,$Hora);
			echo "<h2>Asistencia agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha</th>
			<th>IDempleado</th>
			<th>Hora</th>
			<th>Eliminar</th>
			
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["nombre"]." ".$fila["appaterno"]."  ".$fila["apmaterno"]."  ".$fila["cargo"]."</td>";
				echo "<td>".$fila["hora"]."</td>";

			
		 ?>
		 <td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDasistencia']; ?>" name="id"> 
					<input type="submit" value="eliminar" name="eliminar">
					
				</form>
                </td>
				<?php
				echo "</tr>";
			}
		 ?>
	</table>
	<?php
     
     if(isset($_POST["eliminar"])){
     	$id = $_POST["id"];
     	$obj->eliminar($id);
     	header("Location: ?sec=asi&e=1");
     }
     
	?>
</section>


