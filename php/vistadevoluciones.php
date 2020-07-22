<?php 
	require_once("devoluciones.php");
	$obj = new devoluciones();
 ?>
<section id="principal">

	<form action="" method="post">
		Fecha: <input type="date" name="fecha"> <br>
		Cantidad: <input type="int" name="cantidad"> <br>
		Descripcion: <input type="text" name="descripcion"> <br>
		Producto: <input type="text" name="IDproducto"> <br>
		<input type="submit" value="Agregar Devolucion" name="alta">
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Devolucion eliminada</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Devolucion Agregada</h2>";
		}
		?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];
			$cantidad= $_POST["cantidad"];
			$descripcion = $_POST["descripcion"];
			$IDproducto = $_POST["IDproducto"];
			
			
			$obj->alta($fecha,$cantidad,$descripcion,$IDproducto);
			echo "<h2>Devolucion agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha</th>
			<th>cantidad</th>
			<th>descripcion</th>
			<th>IDproducto</th>
			<th>Eliminar</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
                echo "<td>".$fila["cantidad"]."</td>";
                echo "<td>".$fila["descripcion"]."</td>";
                echo "<td>".$fila["IDproducto"]."</td>";
                 ?>
                 <td>
		        	
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDdevoluciones']; ?>" name="id">
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
			header("Location: ?sec=dev&e=1");
		}

	 ?>
</section>









