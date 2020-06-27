<?php 
	require_once("actividad.php"); //nombre del archivo donde esta el inserta,consultar y eliminar
	$obj = new Actividad(); //nombre del archivo con la primer letra en mayuscula

	// Ahora abajo es solo el nombre del campo de la tabla (palabra amarilla) y la otra palabra es la misma pero con la primer letra en Mayuscula (palabra blanca), osea son las q estan en la linea 5 del archivo de actividad.php : $this->sentencia = "INSERT INTO actividad VALUES(null,'$registro',$IDusuario,'$movimiento_act','$movimiento_tabla')";
	 ?>
<section id="principal">
	<form action="" method="post">
		Registro <input type="text" name="registro"> <br> 
		IDusuario <input type="text" name="IDusuario"> <br>
		Movimiento_act <input type="text" name="movimiento_act"> <br>
		Movimiento_tabla <input type="text" name="movimiento_tabla"> <br>
		</select> <br>
		<input type="submit" value="Agregar Datos" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){ 
		$registro = $_POST["registro"]; //estos son los mismos que estan en letra amarilla de arriba (los de la tabla en la BD)
		$IDusuario = $_POST["IDusuario"]; //tanto la palabra en blanco como en amarillo son la misma
		$movimiento_act = $_POST["movimiento_act"];
		$movimiento_tabla = $_POST["movimiento_tabla"];
$obj->alta($registro,$IDusuario,$movimiento_act,$movimiento_tabla); //aqui pones eso mismo de la letra amarilla pero con$
			echo "<h2>Datos Agregados</h2>"; 
		}

		$resultado = $obj->consulta(); //Ahora aqui abajo haremos la tabla donde se mostrarán los datos, son las mismas palabras que estan hasta arriba en blanco (Registro,IDusuario,Movimiento_act,Movimiento_tabla)
	 ?>
	<table>
		<tr>
			<th>Registro</th> 
			<th>IDusuario</th>
			<th>Movimiento_act</th>
			<th>Movimiento_tabla</th>
			</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>"; //Ahora aqui vas a poner las letras amarillas
				echo "<td>".$fila["registro"]."</td>"; //igual son las que estan en letra amarilla de arriba osea los de la BD
				echo "<td>".$fila["IDusuario"]."</td>";// son las mismas que han estado en amarillo
				echo "<td>".$fila["movimiento_act"]."</td>";
				echo "<td>".$fila["movimiento_tabla"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>
