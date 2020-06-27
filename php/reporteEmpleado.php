<?php 
	require_once("../fpdf/fpdf.php");
	require_once("empleado.php");
	$pdf = new FPDF();
	$obj = new Empleado();
	$res = $obj->consulta();
	$pdf->AddPage();
	
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(200,20,"Reporte de Empleados",0,0,"C");
	$pdf->Ln(30);
	$pdf->SetFont('Arial','B',5);
	$ancho = 25;
	$pdf->Cell($ancho,10,utf8_decode("Nombre"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Appaterno"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("apmaterno"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Correo"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("RFC"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Telefono"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Sexo"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Fechadeingreso"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Cargo"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Salario"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Edo.Civil"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("NSS"),1,0,"C");
	
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',5);
	while($fila = $res->fetch_assoc()){
		$pdf->Cell($ancho,10,utf8_decode($fila["nombre"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["appaterno"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["apmaterno"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["correo"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["rfc"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["telefono"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["sexo"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["fechadeingreso"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["cargo"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["salario"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["estadocivil"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["nss"]),1,0,"C");
	
		$pdf->Ln(10);
	}
	$pdf->Output();
 ?>
 