<?php 
	require_once("pedido.php");
	$obj = new Pedido();
 ?>
<section id="principal">

	<form action="" method="post">
		Fecha <input type="text" name="fecha"> <br>
		IDcliente <input type="text" name="IDcliente"> <br>
		Precio <input type="text" name="precio"> <br>
		Cantidad <input type="text" name="cantidad"> <br>
		Direccion <input type="text" name="direccion"> <br>
		IDproducto <input type="text" name="IDproducto"> <br>
		</select> <br>
		<input type="submit" value="Agregar Datos" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];
			$IDcliente = $_POST["IDcliente"];
			$precio = $_POST["precio"];
			$cantidad = $_POST["cantidad"];
			$direccion = $_POST["direccion"];
			$IDproducto = $_POST["IDproducto"];
			$obj->alta($fecha,$IDcliente,$precio,$cantidad,$direccion,$IDproducto);
			echo "<h2>Datos Agregados</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha</th>
			<th>IDcliente</th>
			<th>Precio</th>
			<th>Cantidad</th>
			<th>Direccion</th>
			<th>IDproducto</th>
			</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["IDcliente"]."</td>";
				echo "<td>".$fila["precio"]."</td>";
				echo "<td>".$fila["cantidad"]."</td>";
				echo "<td>".$fila["direccion"]."</td>";
				echo "<td>".$fila["IDproducto"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>
