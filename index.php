<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ERP</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<nav>
		<ul>
			<a href="index.php"><li>Inicio</li></a>
			<a href="?sec=act"><li>Actividad</li></a>
			<a href="?sec=asi"><li>Asistencia</li></a>
			<a href="?sec=bal"><li>Balance</li></a>
			<a href="?sec=cli"><li>Cliente</li></a>
			<a href="?sec=com"><li>Compra</li></a>
			<a href="?sec=det"><li>Detalle Compra</li></a>
			<a href="?sec=dev"><li>Devoluciones</li></a>
			<a href="?sec=emp"><li>Empleado</li></a>
			<a href="?sec=eva"><li>Evaluacion</li></a>
			<a href="?sec=jor"><li>Jornada</li></a>
			<a href="?sec=man"><li>Mantenimiento</li></a>
			<a href="?sec=mat"><li>Materia Prima</li></a>
			<a href="?sec=mob"><li>Mobiliario</li></a>
			<a href="?sec=pag"><li>Pago</li></a>
			<a href="?sec=ped"><li>Pedido</li></a>
			<a href="?sec=per"><li>Permisos</li></a>
			<a href="?sec=pro"><li>Producto</li></a>
			<a href="?sec=prov"><li>Proveedor</li></a>
			<a href="?sec=proy"><li>Proyecto</li></a>
			<a href="?sec=rem"><li>Remplazo</li></a>
			<a href="?sec=usu"><li>Usuario</li></a>
			<a href="?sec=ven"><li>Venta</li></a>
		</ul>
	</nav>
	<?php

	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
				case 'act':
					require_once("php/vistaActividad.php");
				    break;
				case 'asi':
					require_once("php/vistaasistencia.php");
				    break;
				case 'bal':
					require_once("php/vistabalance.php");
				    break;
				case 'cli':
					require_once("php/vistacliente.php");
				    break;
				case 'com':
					require_once("php/vistacompra.php");
				    break;
				case 'gcom':
					require_once("php/graficaCompra.php");
				    break;
				case 'det':
					require_once("php/vistadetalle_compra.php");
				    break;
				case 'dev':
					require_once("php/vistadevoluciones.php");
				    break;
				case 'emp':
					require_once("php/vistaempleado.php");
				    break;
				case 'eva':
					require_once("php/vistaevaluacion.php");
				    break;
				case 'jor':
					require_once("php/vistajornada.php");
				    break;
				case 'man':
					require_once("php/vistamantenimiento.php");
				    break;
			    case 'mat':
					require_once("php/vistaMateriaP.php");
				    break;
				case 'gmat':
					require_once("php/graficaMateriaPrima.php");
					break;
				case 'mob':
					require_once("php/vistaMobiliario.php");
				    break;
				case 'pag':
					require_once("php/vistaPago.php");
				    break;
				case 'ped':
					require_once("php/vistaPedido.php");
				    break;
				case 'per':
					require_once("php/vistaPermisos.php");
				    break;
				case 'pro':
					require_once("php/vistaProducto.php");
				    break; 
                case 'gpro':
					require_once("php/graficaProducto.php");
					break;
				case 'prov':
					require_once("php/vistaProveedor.php");
				    break;  
				case 'proy':
					require_once("php/vistaProyecto.php");
				    break;  
			    case 'rem':
					require_once("php/vistaRemplazo.php");
				    break;       
				case 'usu':
				    require_once("php/vistaUsuario.php");
				    break;
				case 'ven':
					require_once("php/vistaVenta.php");
				    break;
				case 'gven':
					require_once("php/graficaVenta.php");
				    break;

	}
}
?>
</body>
</html>