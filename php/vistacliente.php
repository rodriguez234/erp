<?php 
	require_once("cliente.php");
	$obj = new cliente();
 ?>
<section id="principal">
<div>
		<a href="?sec=rcli"><input type="button" value="Generar Reporte"></a>
	</div>
	<form action="" method="post">
		nombre: <input type="text" name="nombre"> <br>
		direccion: <input type="text" name="direccion"> <br>
		telefono: <input type="text" name="telefono"> <br>
		correo: <input type="text" name="correo"> <br>
		apematerno: <input type="text" name="apematerno"> <br>
		apepaterno: <input type="text" name="apepaterno"> <br>
		sexo: <input type="text" name="sexo"> <br>
		fenacimiento: <input type="date" name="fenacimiento"> <br>
		</select> <br>
		<input type="submit" value="Agregar Usuario" name="alta">
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
			echo "<h2>Usuario agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>nombre</th>
			<th>direccion</th>
			<th>telefono</th>
			<th>correo</th>
			<th>apematerno</th>
			<th>apepaterno</th>
			<th>sexo</th>
			<th>fenacimiento</th>
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
			}
		 ?>
	</table>

</section>









