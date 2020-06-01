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
	</form>
	<?php 
	if(isset($_POST["alta"])){
			$IDempleado = $_POST["IDempleado"];
			$sal = $_POST["sal"];
			$fecha_dep = $_POST["fecha_dep"];
			$met_pag = $_POST["met_pag"];
			$des = $_POST["des"];


			$obj->alta($IDempleado,$sal,$fecha_dep,$met_pag,$des);
			echo "<h2>Datos Agregados</h2>";
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
			}
		 ?>
	</table>

</section>
