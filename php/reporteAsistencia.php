<?php 
	require_once("../fpdf/fpdf.php");
	require_once("asistencia.php");
	$pdf = new FPDF();
	$obj = new Asistencia();
	$res = $obj->consulta();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(200,20,"Reporte de Asistencia",0,0,"C");
	$pdf->Ln(30);
	$pdf->SetFont('Arial','B',9);
	$ancho = 25;
	$pdf->Cell($ancho,10,utf8_decode("Fecha"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Empleado"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Horario"),1,0,"C");
	
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',9);
	while($fila = $res->fetch_assoc()){
		$pdf->Cell($ancho,10,utf8_decode($fila["fecha"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["nombre"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["hora"]),1,0,"C");

	
		$pdf->Ln(10);
	}
	$pdf->Output();
 ?>