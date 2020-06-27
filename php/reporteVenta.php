<?php 
	require_once("../fpdf/fpdf.php");
	require_once("venta.php");
	$pdf = new FPDF();
	$obj = new Venta();
	$res = $obj->consulta();
	$pdf->AddPage();
	
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(200,20,"Reporte de Ventas",0,0,"C");
	$pdf->Ln(30);
	$pdf->SetFont('Arial','B',11);
	$ancho = 25;
	$pdf->Cell($ancho,10,utf8_decode("ID de Venta"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Fecha"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("ID del Cliente"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Total"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Tipo de Pago"),1,0,"C");
	
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',11);
	while($fila = $res->fetch_assoc()){
		$pdf->Cell($ancho,10,utf8_decode($fila["IDVenta"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["fecha"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["IDCliente"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["Total"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["tipo_pago"]),1,0,"C");
		
		
	
		$pdf->Ln(10);
	}
	$pdf->Output();
 ?>
