<?php 
	require_once("venta.php");
	$obj = new Venta();
 ?>
<section id="principal">
<div>
		<a href="?sec=gven"><input type="button" value="Generar Gráfica de Venta"></a>
	</div>
	<div>
		<a href="?sec=rven"><input type="button" value="Generar Reporte de Venta"></a>
	</div>
	<form action="" method="post">
		Fecha de venta: <input type="date" name="fecha"> <br>
		Lista de Clientes: 
		<?php 
		$obj->obtenerClientes();
		 ?>
		 <br>
		Total: <input type="text" name="Total"> <br>
		Tipo de Pago:
		 <select name="tipo_pago">
			<option value="1">Efectivo</option>
			<option value="2">Tarjeta</option>
		</select> <br>
		<input type="submit" value="Agregar Venta" name="alta"> <br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Venta eliminada</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Venta Agregada</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];
			$cliente = $_POST["cliente"];
			$Total = $_POST["Total"];
			$tipo_pago = $_POST["tipo_pago"];

			$obj->alta($fecha,$cliente,$Total,$tipo_pago);
			echo "<h2>Venta Agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha de Venta</th>
			<th>Cliente</th>
			<th>Total</th>
			<th>Tipo de Pago</th>
			<th>Eliminar</th>
			</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["nombre"]." ".$fila["apepaterno"]." ".$fila["apematerno"]."</td>";
				echo "<td>".$fila["Total"]."</td>";
				if($fila["tipo_pago"]==1){
					echo "<td>Efectivo</td>";
				}else{
					echo "<td>Tarjeta</td>";
				}

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
