<?php
require_once "excell/Classes/PHPExcel/IOFactory.php";
$nombre="../uploads/archivos.xlsx";
$obj=PHPEXCEL_IOFactory::load($nombre);
$nuRows=$obj->setActiveSheetIndex(0)->getHighestRow();
$columna=['','A','B','C','D','E','F'];
for($i=1;$i<=$nuRows;$i++){
    for($j=1;$j<=6;$j++){
        $nombre= $obj->getActiveSheet()->getCell($columna[$j].$i)->getFormattedValue();
        $final[$i][$columna[$j]]=$nombre;
    }
}
