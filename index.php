<?php
$nombre=(string) 'José Alfredo Jiménez García'; 
$edad= (int) 44; 
$estudiante= (boolean) true;
$hobbies=(array) ['Leer','Investigar','Programar equipos tecnológicos', 777, 152];
$objeto=new stdclass;
$objeto->cosas = "Tecnología";
echo '<br>';
echo '<br>';
Print_r ("Le gusta", $objeto->cosas);
echo '<br>';
echo '<br>';
var_dump ($hobbies);
echo '<br>';
echo '<br>';
echo "Su nombre es:  $nombre";
echo '<br>';
echo '<br>';
echo "Su edad es:  $edad";
echo '<br>';
echo '<br>';
echo "Es estudiante:  $estudiante";
echo '<br>';
echo '<br>';
?>