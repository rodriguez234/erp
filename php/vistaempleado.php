<?php 
	require_once("cliente.php");
	$obj = new cliente();
 ?>
<section id="principal">

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
		salario: <input type="date" name="salario"> <br>
		estadocivil: <input type="text" name="estadocivil"> <br>
		nss: <input type="date" name="nss"> <br>
		
		
		<input type="submit" value="Agregar Usuario" name="alta">
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
			echo "<h2>Usuario agregado</h2>";
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
				
			}
		 ?>
	</table>

</section>









