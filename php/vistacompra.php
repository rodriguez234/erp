<?php 
	require_once("compra.php");
	$obj = new compra();
 ?>
<section id="principal">

	<form action="" method="post">
		Nombre: <input type="date" name="fecha"> <br>
		Total: <input type="int" name="total"> <br>
		Tipo_pago: <input type="text" name="Tipo_pago"> <br>
		ID_cliente: <input type="int" name="id_cliente"> <br>
		
		<input type="submit" value="Agregar Usuario" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];
			$total = $_POST["total"];
			$Tipo_pago = $_POST["Tipo_pago"];
			$ID_cliente = $_POST["id_cliente"];
			
			$obj->alta($fecha,$total,$Tipo_pago,$id_cliente);
			echo "<h2>Compra agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>fecha</th>
			<th>total</th>
			<th>tipo_pago</th>
		    <th>id_cliente</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["total"]."</td>";
				echo "<td>".$fila["id_cliente"]."</td>";
				
			}	
		 ?>
	</table>

</section>





