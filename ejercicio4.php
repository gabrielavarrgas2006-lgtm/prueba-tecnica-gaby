<?php
$estudiantes = array (
    array("nombre"=> "Ana", "nota" => 85), 
    array("nombre" => "Carlos" , "nota" => 55),
    array("nombre" => "Maria", "nota" => 92),
    array("nombre" => "Pedro", "nota" => 68),
    array("nombre" => "Laura" , "nota" => 75)
) ; 

$aprobados = 0; 

foreach($estudiantes as $estudiante){
    if($estudiante["nota"] >= 70) {
        echo $estudiante ["nombre"]; 
        $aprobados++;
    }
}
echo $aprobados; 
