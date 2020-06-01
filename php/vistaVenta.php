<?php 
	require_once("venta.php");
	$obj = new Venta();
 ?>
<section id="principal">

	<form action="" method="post">
		IDVenta <input type="text" name="IDVenta"> <br>
		Fecha <input type="text" name="fecha"> <br>
		IDCliente <input type="text" name="IDCliente"> <br>
		Total <input type="text" name="Total"> <br>
		Tipo_pago <input type="text" name="tipo_pago"> <br>
		</select> <br>
		<input type="submit" value="Agregar Datos" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$IDVenta = $_POST["IDVenta"];
			$fecha = $_POST["fecha"];
			$IDCliente = $_POST["IDCliente"];
			$Total = $_POST["Total"];
			$tipo_pago = $_POST["tipo_pago"];
			$obj->alta($IDVenta,$fecha,$IDCliente,$Total,$tipo_pago);
			echo "<h2>Datos Agregados</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>IDVenta</th>
			<th>Fecha</th>
			<th>IDCliente</th>
			<th>Total</th>
			<th>Tipo_pago</th>
			</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["IDVenta"]."</td>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["IDCliente"]."</td>";
				echo "<td>".$fila["Total"]."</td>";
				echo "<td>".$fila["tipo_pago"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>