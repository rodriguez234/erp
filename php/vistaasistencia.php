<?php 
	require_once("asistencia.php");
	$obj = new asistencia();
 ?>
<section id="principal">

	<form action="" method="post">
		Fecha: <input type="date" name="Fecha"> <br>
		IDempleado: <input type="text" name="IDempleado"> <br>
		Hora: <input type="time" name="Hora"> <br>
		</select> <br>
		<input type="submit" value="Agregar asistencia" name="alta">
		<br>
		<?php 
            if(isset($_GET["e"])){
     	echo "<h2> Usuario eliminado</h2>";
     }
		?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$Fecha = $_POST["Fecha"];
			$IDempleado = $_POST["IDempleado"];
			$Hora = $_POST["Hora"];
			
			$obj->alta($Fecha,$IDempleado,$Hora);
			echo "<h2>Asistencia agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha</th>
			<th>IDempleado</th>
			<th>Hora</th>
			<th>eliminar</th>
			
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["Fecha"]."</td>";
				echo "<td>".$fila["IDempleado"]."</td>";
				echo "<td>".$fila["Hora"]."</td>";

			
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
     	header("Location: ?sec=asis&e=1");
     }
     
	?>
</section>


