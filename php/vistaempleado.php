
<?php 
	require_once("empleado.php");
	$obj = new empleado();
 ?>
<section id="principal">
<div>
		<a href="?sec=remp"><input type="button" value="Generar Reporte"></a>
	</div>
	<form action="" method="post">
		nombre: <input type="text" name="nombre"> <br>
		appaterno: <input type="text" name="appaterno"> <br>
		apmaterno: <input type="text" name="apmaterno"> <br>
		correo: <input type="text" name="correo"> <br>
		rfc: <input type="text" name="rfc"> <br>
		telefono: <input type="text" name="telefono"> <br>
		sexo: <input type="text" name="sexo"> <br>
		fechadeingreso: <input type="date" name="fechadeingreso"> <br>
	    cargo: <input type="text" name="cargo"> <br>
		salario: <input type="text" name="salario"> <br>
		estadocivil: <input type="text" name="estadocivil"> <br>
		nss: <input type="text" name="nss"> <br>
		
			</select> <br>
		<input type="submit" value="Agregar Empleado" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre = $_POST["nombre"];
			$appaterno = $_POST["appaterno"];
			$apmaterno = $_POST["apmaterno"];
			$correo = $_POST["correo"];
			$rfc = $_POST["rfc"];
			$telefono = $_POST["telefono"];
			$sexo = $_POST["sexo"];
			$fechadeingreso = $_POST["fechadeingreso"];
			$cargo = $_POST["cargo"];
			$salario = $_POST["salario"];
			$estadocivil = $_POST["estadocivil"];
			$nss = $_POST["nss"];
			$obj->alta($nombre,$appaterno,$apmaterno,$correo,$rfc,$telefono,$sexo,$fechadeingreso,$cargo,$salario,$estadocivil,$nss);
			echo "<h2>Empleado agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>nombre</th>
			<th>appaterno</th>
			<th>apmaterno</th>
			<th>correo</th>
			<th>rfc</th>
			<th>telefono</th>
			<th>sexo</th>
			<th>fechadeingreso</th>
            <th>cargo</th>
			<th>salario</th>
			<th>estadocivil</th>
			<th>nss</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre"]."</td>";
                echo "<td>".$fila["appaterno"]."</td>";
                echo "<td>".$fila["apmaterno"]."</td>";
                echo "<td>".$fila["correo"]."</td>";
                echo "<td>".$fila["rfc"]."</td>";
                echo "<td>".$fila["telefono"]."</td>";
                echo "<td>".$fila["sexo"]."</td>";
                echo "<td>".$fila["fechadeingreso"]."</td>";
                echo "<td>".$fila["cargo"]."</td>";
                echo "<td>".$fila["salario"]."</td>";
                echo "<td>".$fila["estadocivil"]."</td>";
                echo "<td>".$fila["nss"]."</td>";
				
			}
		 ?>
	</table>

</section>









