<?php
    require_once '../report/fpdf.php';
    require_once '../fpdi/fpdi.php';
    require_once '../archivo.php';  




    $filename = "../impresiones/doc.pdf";
    $pdf = new FPDI();
    $pagecount = $pdf->setSourceFile($filename);	
    // Split each page into a new PDF
    $final[$nuRows+1]['C']='';
    for ($i = 1; $i <= $nuRows; $i++) {
        $new_pdf = new FPDI();
        $new_pdf->AddPage();
        $new_pdf->setSourceFile($filename);
        $new_pdf->useTemplate($new_pdf->importPage($i));
        $fecha_inicio=explode('/',$final[$i]['A']);
        $new_filename = "../impresiones/".$final[$i]['C'].' '.$fecha_inicio[1].'_'.$fecha_inicio[0].'_'.$fecha_inicio[2].".pdf";
        $new_pdf->Output($new_filename, "F");
    }
    header('Location: ../index.php');