<?php 
	require_once("detalle_compra.php");
	$obj = new detalle_compra();
 ?>
<section id="principal">

	<form action="" method="post">
		IDmateriaprima: <input type="text" name="IDmateriaprima"> <br>
		IDcompra: <input type="text" name="IDcompra"> <br>
		cantidad: <input type="text" name="cantidad"> <br>
		
		<input type="submit" value="Agregar Usuario" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$IDmateriaprima = $_POST["IDmateriaprima"];
			$IDcompra= $_POST["IDcompra"];
			$cantidad = $_POST["cantidad"];
			
			
			$obj->alta($IDmateriaprima,$IDcompra,$cantidad);
			echo "<h2>Usuario agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>IDmateriaprima</th>
			<th>IDcompra</th>
			<th>cantidad</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre"]."</td>";
                echo "<td>".$fila["direccion"]."</td>";
                echo "<td>".$fila["telefono"]."</td>";
                
			}
		 ?>
	</table>

</section>









