<?php 
	require_once("compra.php");
	$obj = new Compra();
 ?>
<section id="principal">
<div>
		<a href="?sec=gcom"><input type="button" value="Generar Gráfica"></a>
	</div>
	<form action="" method="post">
		Fecha: <input type="date" name="fecha"> <br>
		Total: <input type="int" name="total"> <br>
		Tipo_pago: <input type="text" name="tipo_pago"> <br>
		ID_cliente: <input type="int" name="id_cliente"> <br>
		</select> <br>
		<input type="submit" value="Agregar asistencia" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];
			$total = $_POST["total"];
			$tipo_pago = $_POST["tipo_pago"];
			$id_cliente = $_POST["id_cliente"];
		
         $obj->alta($fecha,$total,$tipo_pago,$id_cliente);
			echo "<h2>Compra agregada</h2>";

		}	

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>fecha</th>
			<th>total</th>
			<th>tipo_pago</th>
		    <th>ID_cliente</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["total"]."</td>";
				echo "<td>".$fila["tipo_pago"]."</td>";
				echo "<td>".$fila["id_cliente"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>





