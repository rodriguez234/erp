<?php 
	require_once("materiaprima.php");
	$obj = new Materiaprima();
 ?>
<section id="principal">

	<form action="" method="post">
		Nombre <input type="text" name="Nombre"> <br>
		Tipo <input type="text" name="Tipo"> <br>
		Descripcion <input type="text" name="Descripcion"> <br>
		Precio <input type="text" name="Precio"> <br>
		Stock <input type="text" name="Stock"> <br>
		Existencias <input type="text" name="Existencias"> <br>
		</select> <br>
		<input type="submit" value="Agregar Datos" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$Nombre = $_POST["Nombre"];
			$Tipo = $_POST["Tipo"];
			$Descripcion = $_POST["Descripcion"];
			$Precio = $_POST["Precio"];
			$Stock = $_POST["Stock"];
			$Existencias = $_POST["Existencias"];

			$obj->alta($Nombre,$Tipo,$Descripcion,$Precio,$Stock,$Existencias);
			echo "<h2>Datos Agregados</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Descripcion</th>
			<th>Precio</th>
			<th>Stock</th>
			<th>Existencias</th>
			</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["Nombre"]."</td>";
				echo "<td>".$fila["Tipo"]."</td>";
				echo "<td>".$fila["Descripcion"]."</td>";
				echo "<td>".$fila["Precio"]."</td>";
				echo "<td>".$fila["Stock"]."</td>";
				echo "<td>".$fila["Existencias"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>