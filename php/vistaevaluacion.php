<?php 
	require_once("evaluacion.php");
	$obj = new evaluacion();
 ?>
<section id="principal">

	<form action="" method="post">
		pregunta 1 : <input type="text" name="pregunta 1"> <br>
		pregunta 2 : <input type="text" name="pregunta 2"> <br>
        pregunta 3 : <input type="text" name="pregunta 3"> <br>
		pregunta 4 : <input type="text" name="pregunta 4"> <br>
		pregunta 5 : <input type="text" name="pregunta 5"> <br>
		pregunta 6 : <input type="text" name="pregunta 6"> <br>
		pregunta 7 : <input type="text" name="pregunta 7"> <br>
		pregunta 8 : <input type="text" name="pregunta 8"> <br>
		pregunta 9 : <input type="text" name="pregunta 9"> <br>
		pregunta 10 : <input type="text" name="pregunta 10"> <br>

		<input type="submit" value="Agregar Usuario" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$pregunta1 = $_POST["pregunta 1"];
			$pregunta2 = $_POST["pregunta 2"];
			$pregunta3 = $_POST["pregunta 3"];
			$pregunta4 = $_POST["pregunta 4"];
			$pregunta5 = $_POST["pregunta 5"];
			$pregunta6 = $_POST["pregunta 6"];
			$pregunta7 = $_POST["pregunta 7"];
			$pregunta8 = $_POST["pregunta 8"];
			$pregunta9 = $_POST["pregunta 9"];
			$pregunta10 = $_POST["pregunta 10"];
			
			$obj->alta($pregunta1,$pregunta2,$pregunta3,$pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8,$pregunta9,$pregunta10);
			echo "<h2>agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>pregunta 1</th>
			<th>pregunta 2</th>
			<th>pregunta 3</th>
			<th>pregunta 4</th>
			<th>pregunta 5</th>
			<th>pregunta 6</th>
			<th>pregunta 7</th>
			<th>pregunta 8</th>
			<th>pregunta 9</th>
			<th>pregunta 10</th>

		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
	
				echo "<tr>";
				echo "<td>".$fila["pregunta1"]."</td>";
				echo "<td>".$fila["pregunta2"]."</td>";
				echo "<td>".$fila["pregunta3"]."</td>";
				echo "<td>".$fila["pregunta4"]."</td>";
				echo "<td>".$fila["pregunta5"]."</td>";
				echo "<td>".$fila["pregunta6"]."</td>";
				echo "<td>".$fila["pregunta7"]."</td>";
				echo "<td>".$fila["pregunta8"]."</td>";
				echo "<td>".$fila["pregunta9"]."</td>";
				echo "<td>".$fila["pregunta10"]."</td>";
			}
		 ?>
	</table>

</section>









