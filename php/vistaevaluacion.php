<?php 
	require_once("evaluacion.php");
	$obj = new evaluacion();
 ?>
<section id="principal">

	<form action="" method="post">
		tipo : <input type="text" name="tipo"> <br>
		pregunta 1 : <input type="text" name="pregunta1"> <br>
		pregunta 2 : <input type="text" name="pregunta2"> <br>
        pregunta 3 : <input type="text" name="pregunta3"> <br>
		pregunta 4 : <input type="text" name="pregunta4"> <br>
		pregunta 5 : <input type="text" name="pregunta5"> <br>
		pregunta 6 : <input type="text" name="pregunta6"> <br>
		pregunta 7 : <input type="text" name="pregunta7"> <br>
		pregunta 8 : <input type="text" name="pregunta8"> <br>
		pregunta 9 : <input type="text" name="pregunta9"> <br>
		pregunta 10 : <input type="text" name="pregunta10"> <br>

		<input type="submit" value="Agregar Usuario" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$tipo = $_POST["tipo"];
			$pregunta1 = $_POST["pregunta1"];
			$pregunta2 = $_POST["pregunta2"];
			$pregunta3 = $_POST["pregunta3"];
			$pregunta4 = $_POST["pregunta4"];
			$pregunta5 = $_POST["pregunta5"];
			$pregunta6 = $_POST["pregunta6"];
			$pregunta7 = $_POST["pregunta7"];
			$pregunta8 = $_POST["pregunta8"];
			$pregunta9 = $_POST["pregunta9"];
			$pregunta10 = $_POST["pregunta10"];
			
			$obj->alta($tipo,$pregunta1,$pregunta2,$pregunta3,$pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8,$pregunta9,$pregunta10);
			echo "<h2>agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>tipo</th>
			<th>pregunta1</th>
			<th>pregunta2</th>
			<th>pregunta3</th>
			<th>pregunta4</th>
			<th>pregunta5</th>
			<th>pregunta6</th>
			<th>pregunta7</th>
			<th>pregunta8</th>
			<th>pregunta9</th>
			<th>pregunta10</th>

		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
	
				echo "<tr>";
				echo "<td>".$fila["tipo"]."</td>";
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









