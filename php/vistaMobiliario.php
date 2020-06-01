<?php 
	require_once("mobiliario.php");
	$obj = new Mobiliario();
 ?>
<section id="principal">

	<form action="" method="post">
		Nombre: <input type="text" name="nombre"> <br>
		Descripcion: <input type="text" name="descripcion"> <br>
		Cantidad: <input type="text" name="cantidad"> <br>
		Nic: <input type="text" name="nic"> <br>
		Tipo: <input type="text" name="tipo"> <br>
		</select> <br>
		<input type="submit" value="Agregar Datos" name="alta">
		</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre = $_POST["nombre"];
			$descripcion = $_POST["descripcion"];
			$cantidad = $_POST["cantidad"];
			$nic = $_POST["nic"];
			$tipo = $_POST["tipo"];

			$obj->alta($nombre,$descripcion,$cantidad,$nic,$tipo);
			echo "<h2>Datos Agregados</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Cantidad</th>
			<th>Nic</th>
			<th>Tipo</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre"]."</td>";
				echo "<td>".$fila["descripcion"]."</td>";
				echo "<td>".$fila["cantidad"]."</td>";
				echo "<td>".$fila["nic"]."</td>";
				echo "<td>".$fila["tipo"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>