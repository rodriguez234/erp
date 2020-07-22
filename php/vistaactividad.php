<?php 
	require_once("actividad.php");
	$obj = new Actividad();
 ?>
<section id="principal">

	<form action="" method="post">
		Registro: <input type="text" name="registro"> <br>	
		Lista de Usuarios:<?php
		$obj->obtenerUsuario();
		?>
		<br>	
		Movimiento Actual: <input type="text" name="movimiento_actual"> <br>
		Movimiento Tabla: <input type="text" name="movimiento_tabla"> <br>
		<input type="submit" value="Agregar Actividad" name="alta"><br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Actividad eliminada</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Actividad agregada</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$registro = $_POST["registro"];			
			$usuario = $_POST["usuario"];
			$movimiento_actual = $_POST["movimiento_actual"];	
			$movimiento_tabla = $_POST["movimiento_tabla"];	

			$obj->alta($registro,$usuario,$movimiento_actual,$movimiento_tabla);
			echo "<h2>Actividad agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Registro</th>
			<th>Usuario</th>
			<th>Mov. Act</th>
			<th>Mov. Tabla</th>
			<th>Eliminar</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["registro"]."</td>";
				echo "<td>".$fila["nombre"]."</td>";
				echo "<td>".$fila["movimiento_act"]."</td>";
				echo "<td>".$fila["movimiento_tabla"]."</td>";
				?>
				<td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDactividad']; ?>" name="id">
					<input type="submit" value="Eliminar" name="eliminar">
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
			header("Location: ?sec=act&e=1");
		}

	 ?>
</section>