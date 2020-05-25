<?php
require_once("php/venta.php");
$obj = new Venta();
$obj->alta("4","2020-04-05","4","6","7");

//$res=$obj->consulta();
//while($fila = $res->fetch_assoc()){
	//echo $fila["IDproducto"]." ".$fila["nombre"]." ".$fila["descripcion"]." ".$fila["preciov"]." ".$fila["precioc"]." ".$fila["cantidad"]." ".$fila["cantmin"]." ".$fila["cantmax"]." ".$fila["categoria"]."<br>";


?>
