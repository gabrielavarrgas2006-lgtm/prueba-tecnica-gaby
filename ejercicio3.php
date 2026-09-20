<?php
function calcularPromedio($nota1, $nota2, $nota3){
    $promedio = ($nota1 + $nota2 + $nota3) / 3;

    if($promedio >= 70){
        $estado = "Aprobado";
    }else{
        $estado = "Reprobado";
    }

    echo "Promedio: ".$promedio."<br>";
    echo "Estado: ".$estado;
}

calcularPromedio(80, 60, 70);
