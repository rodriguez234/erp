<?php 
	require_once("mantenimiento.php");
	$obj = new mantenimiento();
 ?>
<section id="principal">

	<form action="" method="post">
		fecha_man: <input type="date" name="fecha_man"> <br>
		area: <input type="int" name="area"> <br>
		IDmob: <input type="int" name="IDmob"> <br>
		costo_man: <input type="int" name="costo_man"> <br>
	    IDempleado: <input type="int" name="IDempleado"> <br>
		
		<input type="submit" value="Agregar Usuario" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha_man = $_POST["fecha_man"];
			$area = $_POST["area"];
			$IDmob = $_POST["IDmob"];
			$costo_man = $_POST["costo_man"];
			$IDempleado = $_POST["IDempleado"];
			
			$obj->alta($fecha_man,$area,$IDmob,$costo_man,$IDempleado);
			echo "<h2>Compra agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>fecha_man</th>
			<th>area</th>
			<th>IDmob</th>
		    <th>costo_man</th>
		    <th>IDempleado</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha_man"]."</td>";
				echo "<td>".$fila["area"]."</td>";
				echo "<td>".$fila["IDmob"]."</td>";
				echo "<td>".$fila["costo_man"]."</td>";
			    echo "<td>".$fila["IDempleado"]."</td>";

			}	
		 ?>
	</table>

</section>