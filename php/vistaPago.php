<?php 
	require_once("pago.php");
	$obj = new Pago();
 ?>
<section id="principal">

	<form action="" method="post">
		IDempleado <input type="text" name="IDempleado"> <br>
		Saldo <input type="text" name="sal"> <br>
		FechaDep <input type="text" name="fecha_dep"> <br>
        MetodoPago <input type="text" name="met_pag"> <br>
        Desc <input type="text" name="des"> <br>
        </select> <br>
		<input type="submit" value="Agregar Datos" name="alta">
		<br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Datos eliminados</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Datos Agregados</h2>";
		}

		 ?>
	</form>
	<?php 
	if(isset($_POST["alta"])){
			$IDempleado = $_POST["IDempleado"];
			$sal = $_POST["sal"];
			$fecha_dep = $_POST["fecha_dep"];
			$met_pag = $_POST["met_pag"];
			$des = $_POST["des"];


			$obj->alta($IDempleado,$sal,$fecha_dep,$met_pag,$des);
			header("Location: ?sec=pag&i=1 ");
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>IDempleado</th>
			<th>Saldo</th>
			<th>FechaDep</th>
			<th>MetodoPago</th>
			<th>Desc</th>
			<th>Eliminar</th>
			</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["IDempleado"]."</td>";
				echo "<td>".$fila["sal"]."</td>";
				echo "<td>".$fila["fecha_dep"]."</td>";
				echo "<td>".$fila["met_pag"]."</td>";
				echo "<td>".$fila["des"]."</td>";
				echo "</tr>";
				?>
		        <td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDpago']; ?>" name="id">
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
			header("Location: ?sec=pag&e=1");
		}

	 ?>
</section>
