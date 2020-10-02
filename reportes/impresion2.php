<?php

    require_once '../report/fpdf.php';
    require_once '../archivo.php'; 
    $pdf = new FPDF("p","mm","A4");
    for($z=1;$z<=$nuRows;$z++){
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'BU', 20);
    $pdf->Ln(40);
    $pdf->Image('../img/logo.png',75,20);
    if($z==1){
        $pdf->SetLeftMargin(0);
        $pdf->SetRightMargin(70);
        $pdf->Cell(185, 10, "Constancia de Alta", 0,0,'C');
    }else{
        $pdf->SetLeftMargin(30);
        $pdf->SetRightMargin(70);
        $pdf->Cell(143, 10, "Constancia de Alta", 0,0,'C');
    }
    $pdf->Ln(10);
    $pdf->SetFont('Arial','', 12);
    $pdf->SetLeftMargin(30);
    $pdf->SetRightMargin(70);
    $pdf->Ln(10);
    $fecha_inicio=explode('/',$final[$z]['A']);
    $fecha_final=explode('/',$final[$z]['B']);
    $dias=$final[$z]['F']+1;
    $contenido="Por la presente se deja constancia que ".$final[$z]['C'].", identificado con DNI: ".$final[$z]['D'].", realizó aislamiento social por ".$dias." días, luego de haber pasado el perfil COVID-19 en nuestra institución, obteniendo resultado positivo en  la  prueba molecular,  este periodo está  comprendido  entre el: ".$fecha_inicio[1]."/0".$fecha_inicio[0]. "/".$fecha_inicio[2]." al ".$fecha_final[1]."/".$fecha_final[0]. "/".$fecha_final[2].", quien ha evolucionado favorablemente.";
    $pdf->MultiCell(141,10,utf8_decode($contenido),0,'J');
    $pdf->MultiCell(141,10,"Se expide la presente a solicitud del interesado para los fines que crea por conveniente",0,'J');
    $pdf->Ln(15);
    $pdf->MultiCell(141,10,"Lima, ".$fecha_final[1]." de ".$final[$z]['E']." del 2020",0,'R');
    $pdf->Ln(10);
    $pdf->Image('../img/firma_llerena.png',68,190);
    $pdf->Ln(35);
    $pdf->MultiCell(141,5,"CMP: 49335",0,'C');
    $pdf->MultiCell(141,5,utf8_decode("Directora de Vigilancia Médica Ocupacional & Telegestión"),0,'C');
    $pdf->MultiCell(141,5,"S.G. Natclar SAC",0,'C');
    $pdf->Ln(10);
    }
    $pdf->Output('F','../impresiones/doc.pdf');
    header('Location: ../index.php');