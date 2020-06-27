<?php 
	require_once("balance.php");
	$obj = new balance();
 ?>
<section id="principal">

	<form action="" method="post">
		fecha de inicio : <input type="date" name="fechainicio"> <br>
		fecha final: <input type="date" name="fechafin"> <br>
		total: <input type="int" name="total"> <br>
		
		<input type="submit" value="Agregar Usuario" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fechainicio = $_POST["fechainicio"];
			$fechafin = $_POST["fechafin"];
			$total = $_POST["total"];
			
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


