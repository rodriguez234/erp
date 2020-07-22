<?php 
	require_once("cliente.php");
	$obj = new cliente();
 ?>
<section id="principal">
<div>
	    <a class="boton_personalizado" href="?sec=rcli">Generar Reporte de Clientes</a>
		<a href="?sec=rcli"><input type="button" value="Generar Reporte de Clientes"></a>
	</div>
	<form action="" method="post">
		Nombre: <input type="text" name="nombre"> <br>
		Direccion: <input type="text" name="direccion"> <br>
		Telefono: <input type="text" name="telefono"> <br>
		Correo: <input type="text" name="correo"> <br>
		Apellido Materno: <input type="text" name="apematerno"> <br>
		Apellido Paterno: <input type="text" name="apepaterno"> <br>
		Genero: <input type="text" name="sexo"> <br>
		Fecha de Nacimiento: <input type="date" name="fenacimiento"> <br>
		</select> <br>
		<input type="submit" value="Agregar Cliente" name="alta">
		<br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Cliente eliminado</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Cliente Agregado</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre = $_POST["nombre"];
			$direccion = $_POST["direccion"];
			$telefono = $_POST["telefono"];
			$correo = $_POST["correo"];
			$apematerno = $_POST["apematerno"];
			$apepaterno = $_POST["apepaterno"];
			$sexo = $_POST["sexo"];
			$fenacimiento = $_POST["fenacimiento"];
			
			$obj->alta($nombre,$direccion,$telefono,$correo,$apematerno,$apepaterno,$sexo,$fenacimiento);
			echo "<h2>Cliente agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th>Apematerno</th>
			<th>Apepaterno</th>
			<th>Genero</th>
			<th>Fecha Nacimiento</th>
			<th>Eliminar</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre"]."</td>";
                echo "<td>".$fila["direccion"]."</td>";
                echo "<td>".$fila["telefono"]."</td>";
                echo "<td>".$fila["correo"]."</td>";
                echo "<td>".$fila["apematerno"]."</td>";
                echo "<td>".$fila["apepaterno"]."</td>";
                echo "<td>".$fila["sexo"]."</td>";
                echo "<td>".$fila["fenacimiento"]."</td>";
                echo "</tr>";
		 ?>
		 <td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDcliente']; ?>" name="id">
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
			header("Location: ?sec=cli&e=1");
		}

	 ?>
</section>









