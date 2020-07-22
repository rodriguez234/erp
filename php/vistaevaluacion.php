<?php 
	require_once("evaluacion.php");
	$obj = new evaluacion();
 ?>
<section id="principal">

	<form action="" method="post">
		Tipo : <input type="text" name="tipo"> <br>
		P. 1 : <input type="text" name="pregunta1"> <br>
		P. 2 : <input type="text" name="pregunta2"> <br>
        P. 3 : <input type="text" name="pregunta3"> <br>
		P. 4 : <input type="text" name="pregunta4"> <br>
		P. 5 : <input type="text" name="pregunta5"> <br>
		P. 6 : <input type="text" name="pregunta6"> <br>
		P. 7 : <input type="text" name="pregunta7"> <br>
		P. 8 : <input type="text" name="pregunta8"> <br>
		P. 9 : <input type="text" name="pregunta9"> <br>
		P. 10 : <input type="text" name="pregunta10"> <br>

		<input type="submit" value="Agregar Evaluacion" name="alta">
		<br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Evaluacion Eliminada</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Evaluacion Agregada</h2>";
		}

		 ?>
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
			echo "<h2>Evaluacion Agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Tipo</th>
			<th>P. 1</th>
			<th>P. 2</th>
			<th>P. 3</th>
			<th>P. 4</th>
			<th>P. 5</th>
			<th>P. 6</th>
			<th>P. 7</th>
			<th>P. 8</th>
			<th>P. 9</th>
			<th>P. 10</th>
			<th>Eliminar</th>

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
		 ?>
		  <td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDevaluación']; ?>" name="id">
					<input type="submit" value="Eliminar" name="eliminar">
				</form>
				</td>
				<?php
				echo "</tr>";
			}
			?>
	</table>
	<?php 
      if(isset($_POST["eliminar"])){
			$id = $_POST["id"];
			$obj->eliminar($id);
			header("Location: ?sec=eva&e=1");
		}

	 ?>

</section>









