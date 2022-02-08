<?php
define("nota1",3.0);
define("nota2",4.0);
define("nota3",2.0);
define("nota4",5.0);

$porcentajes1=nota1*0.15;
$porcentajes2=nota2*0.20;
$porcentajes3=nota3*0.25;
$porcentajes4=nota4*0.40;

$total=$porcentajes1+$porcentajes2+$porcentajes3+$porcentajes4;
echo "alumno:juan"."<br>";
echo "materia:Ingles"."<br>";
echo "nota final:$total";

