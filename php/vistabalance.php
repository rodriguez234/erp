<?php 
	require_once("balance.php");
	$obj = new balance();
 ?>
<section id="principal">

	<form action="" method="post">
		Nombre: <input type="date" name="fechainicio"> <br>
		Password: <input type="date" name="fechafin"> <br>
		Password: <input type="int" name="total"> <br>
		
		<input type="submit" value="Agregar Usuario" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fechainicio = $_POST["fechainicio"];
			$fechafin = $_POST["fechafin"];
			$total = $_POST["total"];
			$tipo = $_POST["tipo"];
			
			$obj->alta($fechainicio,$fechafin,$total);
			echo "<h2>Usuario agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>fechainicio</th>
			<th>fechafin</th>
		
			<th>total</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fechainicio"]."</td>";
				echo "<td>".$fila["fechafin"]."</td>";
				echo "<td>".$fila["total"]."</td>";
			
				echo "</tr>";
			}
		 ?>
	</table>

</section>


