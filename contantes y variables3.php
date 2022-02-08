<?php
define("iva",0.19);
$cantidadP=15;
$valorU=43000;
$valorsin=$cantidadP*$valorU;
$valoriva=iva*$valorsin;
$valor= $valorsin+$valoriva;
echo "el valor total sin iva es:$valorsin "."<br>";
echo "el valor total con iva es: $valoriva"."<br>";
echo "el valor total mas iva es:$valor"."<br>";
