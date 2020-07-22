<?php 
	require_once("jornada.php");
	$obj = new jornada();
 ?>
<section id="principal">

	<form action="" method="post">
		Horas Trabajadas: <input type="int" name="hrs_trabajadas"> <br>
		Dias Trabajados: <input type="int" name="dias_trabajados"> <br>
		Pago Hora: <input type="int" name="pago_hora"> <br>
		Horas Extra: <input type="int" name="horas_extra"> <br>
	    Bonos: <input type="int" name="bonos"> <br>
		IDempleado: <input type="int" name="IDempleado"> <br>
		<input type="submit" value="Agregar Jornada" name="alta">
		<br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Jornada eliminada</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Jornada Agregada</h2>";
		}

		 ?>
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
			echo "<h2>Jornada agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Horas Trabajadas</th>
			<th>Dias Trabajados</th>
			<th>Pago Hora</th>
		    <th>Horas Extra</th>
		    <th>Bonos</th>
		    <th>IDempleado</th>
		    <th>Eliminar</th>
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

			
			 ?>
		        <td>
		        	
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDjornada']; ?>" name="id">
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
			header("Location: ?sec=jor&e=1");
		}

	 ?>

</section>





