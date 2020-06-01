<?php 
	require_once("remplazo.php");
	$obj = new Remplazo();
 ?>
<section id="principal">

	<form action="" method="post">
		IDmobiliario <input type="text" name="IDmobiliario"> <br>
		Fecha <input type="text" name="fecha"> <br>
		Costo <input type="text" name="costo"> <br>
		Descripcion <input type="text" name="descripcion"> <br>
		</select> <br>
		<input type="submit" value="Agregar Datos" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$IDmobiliario = $_POST["IDmobiliario"];
			$fecha = $_POST["fecha"];
			$costo = $_POST["costo"];
			$descripcion = $_POST["descripcion"];
			$obj->alta($IDmobiliario,$fecha,$costo,$descripcion);
			echo "<h2>Datos Agregados</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>IDmobiliario</th>
			<th>Fecha</th>
			<th>Costo</th>
			<th>Descripcion</th>
			</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["IDmobiliario"]."</td>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["costo"]."</td>";
				echo "<td>".$fila["descripcion"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>