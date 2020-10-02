<?php
    require_once '../report/fpdf.php';
    require_once '../archivo.php'; 
    $pdf = new FPDF("p","mm","A4");
    for($z=1;$z<=$nuRows;$z++){
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Ln(10);
    if($z==1){
        $pdf->SetLeftMargin(0);
        $pdf->SetRightMargin(70);
        $pdf->Cell(185, 10, "CONSTANCIA DE SALUD", 0,0,'C');
    }else{
        $pdf->SetLeftMargin(30);
        $pdf->SetRightMargin(70);
        $pdf->Cell(143, 10, "CONSTANCIA DE SALUD", 0,0,'C');
    }
    $pdf->Ln(10);
    $pdf->SetFont('Arial','', 11);
    $pdf->SetLeftMargin(30);
    $pdf->SetRightMargin(70);
    $pdf->Ln(5);
    $fecha_inicio=explode('/',$final[$z]['A']);
    $fecha_final=explode('/',$final[$z]['B']);
    $dias=$final[$z]['F']+1;
    $nombre = explode(' ',$final[$z]['C'],3);
    $pdf->MultiCell(141,8,utf8_decode("Por medio del presente documento, el médico que suscribe, hace constar que el señor:"),0,'J');
    $pdf->Cell(143,10,utf8_decode("-  Nombres y apellidos: ".$nombre[2]." ".$nombre[0]." ".$nombre[1]),0,0,'L');
    $pdf->Ln(5);
    $pdf->Cell(143,10,utf8_decode("-  DNI N°: ".$final[$z]['D']),0,0,'L');
    $pdf->Ln(5);
    $pdf->Cell(143,10,utf8_decode("-  Trabajador de: EMPRESA MINERA LOS QUENUALES S.A."),0,0,'L');
    $pdf->Ln(15);
    $contenido="Ha sido evaluado oportunamente de acuerdo a los protocolos y normas sanitarias emitidas para la vigilancia, prevención y control del Covid-19, y  tomando  en  cuenta  el  seguimiento  médico  respecto  del cumplimiento  de su";
    $pdf->MultiCell(141,8,utf8_decode($contenido),0,'J');
    $pdf->Cell(100,10,utf8_decode("periodo  de  aislamiento, su  condición  médica  es: "),0,0,'L');
    $pdf->SetFont('Arial','B', 11);
    $pdf->Ln(0);
    $pdf->Cell(143,10,utf8_decode("  ALTA EPIDEMIOLOGICA . "),0,0,'R');
    $pdf->SetFont('Arial','', 11);
    $pdf->Ln(13);
    $pdf->MultiCell(141,8,"En consecuencia, el referido trabajador se encuentra APTO para el trabajo. ",0,'J');
    $pdf->Ln(5);
    $pdf->MultiCell(141,8,"Finalmente, se deja constancia que el referido trabajador no requiere de nuevas pruebas por el momento.",0,'J');
    $pdf->Ln(5);
    $pdf->MultiCell(141,8,"Se expide la presente constancia para los fines que correspondan.",0,'J');
    $pdf->Ln(10);
    if($fecha_final[1] < 10){
        $pdf->MultiCell(141,8,"Lima, 0".$fecha_final[1]." de ".$final[$z]['E']." del 2020",0,'C');
    }else{
        $pdf->MultiCell(141,8,"Lima, ".$fecha_final[1]." de ".$final[$z]['E']." del 2020",0,'C');
    }
    $pdf->Ln(20);
    $pdf->Image('../img/firma_llerena.png',68,195);
    $pdf->Ln(30);
    $pdf->MultiCell(141,5,utf8_decode("Firma y sello del médico"),0,'C');
    $pdf->MultiCell(141,5,"CMP: 49335",0,'C');
    $pdf->Ln(10);
    }
    $pdf->Output('F','../impresiones/doc.pdf');
    header('Location: ../index.php');