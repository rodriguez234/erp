<?php 
	require_once("compra.php");
	$obj = new Compra();
 ?>
<section id="principal">
<div>
		<a href="?sec=gcom"><input type="button" value="Generar Gráfica de las Compras"></a>
	</div>
	<div>
		<a href="?sec=rcom"><input type="button" value="Generar Reporte de las Compras"></a>
	</div>
	<form action="" method="post">
		Fecha: <input type="date" name="fecha"> <br>
		Total: <input type="int" name="total"> <br>
		Tipo de pago: <input type="text" name="tipo_pago"> <br>
		Lista de Clientes: 
		<?php
		$obj->obtenerCliente();
		?>
		<br>	
		</select> <br>
		<input type="submit" value="Agregar la compra" name="alta">
		<br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Compra eliminada</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Compra Agregada</h2>";
		}

		 ?>


	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];
			$total = $_POST["total"];
			$tipo_pago = $_POST["tipo_pago"];
			$cliente = $_POST["cliente"];
		
         $obj->alta($fecha,$total,$tipo_pago,$cliente);
			echo "<h2>Compra agregada</h2>";

		}	

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha</th>
			 <th>Cliente</th>
			<th>Total</th>
			<th>Tipo de pago</th>
		    <th>Eliminar</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["nombre"]." ".$fila["apepaterno"]." ".$fila["apematerno"]."</td>";
				echo "<td>".$fila["total"]."</td>";
				echo "<td>".$fila["tipo_pago"]."</td>";
				echo "</tr>";
		 ?>
		  <td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDcompra']; ?>" name="id">
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
			header("Location: ?sec=com&e=1");
		}

	 ?>
</section>





