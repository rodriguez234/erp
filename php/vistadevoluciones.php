<?php 
	require_once("devoluciones.php");
	$obj = new devoluciones();
 ?>
<section id="principal">

	<form action="" method="post">
		fecha: <input type="date" name="fecha"> <br>
		cantidad: <input type="int" name="cantidad"> <br>
		descripcion: <input type="text" name="descripcion"> <br>
		IDproducto: <input type="text" name="IDproducto"> <br>
		<input type="submit" value="Agregar Usuario" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];
			$cantidad= $_POST["cantidad"];
			$descripcion = $_POST["descripcion"];
			$IDproducto = $_POST["IDproducto"];
			
			
			$obj->alta($fecha,$cantidad,$descripcion,$IDproducto);
			echo "<h2>Usuario agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>fecha</th>
			<th>cantidad</th>
			<th>descripcion</th>
			<th>IDproducto</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
                echo "<td>".$fila["cantidad"]."</td>";
                echo "<td>".$fila["descripcion"]."</td>";
                echo "<td>".$fila["IDproducto"]."</td>";
                
			}
		 ?>
	</table>

</section>









