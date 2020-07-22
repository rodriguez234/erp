<?php 
	require_once("balance.php");
	$obj = new balance();
 ?>
<section id="principal">

	<form action="" method="post">
		fecha de inicio : <input type="date" name="fechainicio"> <br>
		fecha final: <input type="date" name="fechafin"> <br>
		Total: <input type="int" name="total"> <br>
		
		<input type="submit" value="Agregar Balance" name="alta">
		<br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Balance eliminado</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Balance Agregado</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fechainicio = $_POST["fechainicio"];
			$fechafin = $_POST["fechafin"];
			$total = $_POST["total"];
			
			$obj->alta($fechainicio,$fechafin,$total);
			echo "<h2>Balance agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
		    <th>Total</th>
		    <th>Eliminar</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fechainicio"]."</td>";
				echo "<td>".$fila["fechafin"]."</td>";
				echo "<td>".$fila["total"]."</td>";
			
				echo "</tr>";
		 ?>
		 <td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDbalance']; ?>" name="id">
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
			header("Location: ?sec=bal&e=1");
		}

	 ?>
</section>


