<?php
function obtenerEstado($nota) {
    if ($nota < 0 || $nota > 100) {
        return "Nota inválida";
    } elseif ($nota >= 90) {
        return "Excelente";
    } elseif ($nota >= 80) {
        return "Muy bueno";
    } elseif ($nota >= 70) {
        return "Aprobado";
    } else {
        return "Reprobado";
    }
}

echo obtenerEstado(95) . "<br>";
echo obtenerEstado(75) . "<br>";
echo obtenerEstado(120);
