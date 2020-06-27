<?php 
	require_once("jornada.php");
	$obj = new jornada();
 ?>
<section id="principal">

	<form action="" method="post">
		hrs_trabajadas: <input type="int" name="hrs_trabajadas"> <br>
		dias_trabajados: <input type="int" name="dias_trabajados"> <br>
		pago_hora: <input type="int" name="pago_hora"> <br>
		horas_extra: <input type="int" name="horas_extra"> <br>
	    bonos: <input type="int" name="bonos"> <br>
		IDempleado: <input type="int" name="IDempleado"> <br>
		<input type="submit" value="Agregar Usuario" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$hrs_trabajadas = $_POST["hrs_trabajadas"];
			$dias_trabajados = $_POST["dias_trabajados"];
			$pago_hora = $_POST["pago_hora"];
			$horas_extra = $_POST["horas_extra"];
			$bonos = $_POST["bonos"];
			$IDempleado = $_POST["IDempleado"];
			
			$obj->alta($hrs_trabajadas,$dias_trabajados,$pago_hora,$horas_extra,$bonos,$IDempleado);
			echo "<h2>Compra agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>hrs_trabajadas</th>
			<th>dias_trabajados</th>
			<th>pago_hora</th>
		    <th>horas_extra</th>
		    <th>bonos</th>
		    <th>IDempleado</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["hrs_trabajadas"]."</td>";
				echo "<td>".$fila["dias_trabajados"]."</td>";
				echo "<td>".$fila["pago_hora"]."</td>";
				echo "<td>".$fila["horas_extra"]."</td>";
			    echo "<td>".$fila["bonos"]."</td>";
			    echo "<td>".$fila["IDempleado"]."</td>";


			}	
		 ?>
	</table>

</section>





