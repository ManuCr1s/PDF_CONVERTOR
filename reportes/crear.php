<?php
require_once "../archivo.php";

for($a=1;$a<=$nuRows-1;$a++){
    $nombres[$a]=$final[$a+1]['A']." ".$final[$a+1]['B']." ".$final[$a+1]['C']." ".$final[$a+1]['D'].$final[$a+1]['E'];
}
$hola="
";
for($i=1;$i<=12;$i++){
    $cadena=fopen("../impresiones/".$nombres[$i].".php", "w+b");
    fwrite($cadena,
    "$hola");
}
