<?php 
	require_once("venta.php");
	$obj = new Venta();
 ?>
<section id="principal">
<div>
		<a href="?sec=gven"><input type="button" value="Generar Gráfica"></a>
	</div>
	<div>
		<a href="?sec=rven"><input type="button" value="Generar Reporte"></a>
	</div>
	<form action="" method="post">
		IDVenta <input type="text" name="IDVenta"> <br>
		Fecha <input type="text" name="fecha"> <br>
		IDCliente <input type="text" name="IDCliente"> <br>
		Total <input type="text" name="Total"> <br>
		Tipo_pago <input type="text" name="tipo_pago"> <br>
		</select> <br>
		<input type="submit" value="Agregar Datos" name="alta">
		<br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Datos eliminados</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Datos Agregados</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$IDVenta = $_POST["IDVenta"];
			$fecha = $_POST["fecha"];
			$IDCliente = $_POST["IDCliente"];
			$Total = $_POST["Total"];
			$tipo_pago = $_POST["tipo_pago"];
			$obj->alta($IDVenta,$fecha,$IDCliente,$Total,$tipo_pago);
			header("Location: ?sec=ven&i=1 ");
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
				<th>Eliminar</th>
			</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["IDVenta"]."</td>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["IDCliente"]."</td>";
				echo "<td>".$fila["Total"]."</td>";
				echo "<td>".$fila["tipo_pago"]."</td>";
				 ?>
		        <td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDVenta']; ?>" name="id">
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
			header("Location: ?sec=ven&e=1");
		}

	 ?>

</section>