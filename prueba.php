<?php
 require_once("php/venta.php");
 $obj = new Venta();
 //$obj->alta("4","2020-04-05","4","6","7");
 $res = $obj->consulta();
 //while($fila = $res->fetch_assoc()){
//	echo $fila["IDusuario"]." ".$fila["nombre"]." ".$fila["tipo"]." ".$fila["password"]."<br>";
 //}


echo "************************************";
$obj->eliminar(2020);
$res = $obj->consulta();

//while($fila = $res->fetch_assoc()){
	//echo $fila["ID"]." ".$fila["Nombre"]." ".$fila["Tipo"]." ".$fila["Descripcion"]." ".$fila["Precio"]." ".$fila["Stock"]." ".$fila["Existencias"]."<br>";


?>
