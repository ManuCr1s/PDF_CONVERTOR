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
    $contenido="Por la presente se deja constancia que ".$final[$z]['C'].", identificado con DNI: ".$final[$z]['D'].", realizó aislamiento social por ".$dias." días, luego de haber pasado el perfil COVID-19 en nuestra institución, obteniendo resultado positivo en  la  prueba serológica,  este periodo está  comprendido  entre el: ".$fecha_inicio[1]."/0".$fecha_inicio[0]. "/".$fecha_inicio[2]." al ".$fecha_final[1]."/0".$fecha_final[0]. "/".$fecha_final[2].", quien ha evolucionado favorablemente.";
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
    /*
    $pdf->Output('F','../impresiones/doc.pdf');
    class PDF extends FPDF
            {
            protected $B = 0;
            protected $I = 0;
            protected $U = 0;
            protected $HREF = '';
            protected $align;

            function WriteHTML($html)
            {
                // Intérprete de HTML
                $html = str_replace("\n",' ',$html);
                $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
                foreach($a as $i=>$e)
                {
                    if($i%2==0)
                    {
                        // Text
                        if($this->HREF)
                            $this->PutLink($this->HREF,$e);
                        else
                            $this->Write(5,$e);
                    }
                    else
                    {
                        // Etiqueta
                        if($e[0]=='/')
                            $this->CloseTag(strtoupper(substr($e,1)));
                        else
                        {
                            // Extraer atributos
                            $a2 = explode(' ',$e);
                            $tag = strtoupper(array_shift($a2));
                            $attr = array();
                            foreach($a2 as $v)
                            {
                                if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                                    $attr[strtoupper($a3[1])] = $a3[2];
                            }
                            $this->OpenTag($tag,$attr);
                        }
                    }
                }
            }

            function OpenTag($tag, $attr)
            {
                // Etiqueta de apertura
                if($tag=='B' || $tag=='I' || $tag=='U')
                    $this->SetStyle($tag,true);
                if($tag=='A')
                    $this->HREF = $attr['HREF'];
                if($tag=='BR')
                    $this->Ln(5);
            }

            function CloseTag($tag)
            {
                // Etiqueta de cierre
                if($tag=='B' || $tag=='I' || $tag=='U')
                    $this->SetStyle($tag,false);
                if($tag=='A')
                    $this->HREF = '';
            }

            function SetStyle($tag, $enable)
            {
                // Modificar estilo y escoger la fuente correspondiente
                $this->$tag += ($enable ? 1 : -1);
                $style = '';
                foreach(array('B', 'I', 'U') as $s)
                {
                    if($this->$s>0)
                        $style .= $s;
                }
                $this->SetFont('',$style);
            }

            function PutLink($URL, $txt)
            {
                // Escribir un hiper-enlace
                $this->SetTextColor(0,0,255);
                $this->SetStyle('U',true);
                $this->Write(5,$txt,$URL);
                $this->SetStyle('U',false);
                $this->SetTextColor(0);
            }
        
}*/
/*
    $pdf = new PDF('p','mm','A4');
    $j=1;
    for($z=1;$z<=$nuRows;$z++){
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 20);
        $pdf->Image('../img/logo.png',75,20);
        $pdf->SetRightMargin(1);
        $pdf->SetLeftMargin(1); 
        $pdf->ln(40);
        $pdf->WriteHTML(utf8_decode("                                   <u><b>Constancia de Alta</b></u>"));
        $pdf->ln(15);
        $pdf->SetFont('Arial', '', 12);
        $pdf->SetRightMargin(30);
        $pdf->SetLeftMargin(30); 
        $fecha_inicio=explode('/',$final[$z]['A']);
        $fecha_final=explode('/',$final[$z]['B']);
        $dias=$final[$z]['F']+1;
        $contenido=$pdf->WriteHTML(utf8_decode("Por la presente se deja constancia que <b>".$final[$z]['C']."</b>, identificado con DNI: ".$final[$z]['D'].", realizó aislamiento social por ".$dias." días, luego de haber pasado el perfil COVID-19 en nuestra institución, obteniendo resultado positivo en  la  prueba  serológica,  este periodo está  comprendido  entre el: <b>".$fecha_inicio[1]."/0".$fecha_inicio[0]. "/".$fecha_inicio[2]."</b> al <b>".$fecha_final[1]."/0".$fecha_final[0]. "/".$fecha_final[2]."</b>, quien ha evolucionado favorablemente."));
        $pdf->MultiCell(0,20,$contenido,'0','J'); 
        $pdf->WriteHTML(utf8_decode("Se expide la presente a solicitud del interesado para los fines que crea por conveniente"));
        $pdf->ln(20);
        $pdf->WriteHTML('                                                                        Lima, <b>'.$fecha_final[1].'</b> de ' .$final[$z]['E']. ' del 2020');
        $pdf->ln(30);
        $pdf->Image('../img/firma_llerena.png',70,150);
        $pdf->ln(30);
        $pdf->WriteHTML(utf8_decode("                                                    CMP: 49335"));
        $pdf->ln(5);
        $pdf->WriteHTML(utf8_decode("                Directora de Epidemiologia Médica Ocupacional & Telegestión"));
        $pdf->ln(5);
        $pdf->WriteHTML(utf8_decode("                                                  S.G. Natclar SAC"));       

    }

    */
    /* Para guardar sin abrir 
    $pdf->Output('reporte','I');
*/